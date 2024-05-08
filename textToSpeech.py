"""
Text to speech
Author: Elijah Abolaji
Version: 1.0.0
"""

import tkinter as tk
from tkinter import filedialog, messagebox, ttk
import io
import pygame as pg
from gtts import gTTS, lang
import threading

def show_error_message(error_message):
    messagebox.showerror("Error", error_message)

def show_info_message(message):
    messagebox.showinfo("Conversion Done", message)

def speak(text, language, accent, filename=None):
    def update_progress(progress):
        progress_bar['value'] = progress

    def finish_progress():
        progress_dialog.destroy()
        if filename:
            show_info_message("Conversion and save operation completed successfully!")

    progress_dialog = tk.Toplevel(root)
    progress_dialog.title("Converting...")
    progress_dialog.geometry("300x50")
    progress_label = tk.Label(progress_dialog, text="Converting text to speech. Please wait...")
    progress_label.pack(pady=5)
    progress_bar = ttk.Progressbar(progress_dialog, orient="horizontal", length=200, mode="indeterminate")
    progress_bar.pack(pady=5)
    progress_bar.start()

    try:
        tts = gTTS(text=text, lang=language, tld=accent, slow=False)
        total_length = len(text.split())
        current_progress = 0
        step = 100 / total_length
        if filename:
            tts.save(filename)
            finish_progress()
        else:
            with io.BytesIO() as file:
                tts.write_to_fp(file)
                file.seek(0)
                pg.mixer.init()
                pg.mixer.music.load(file)
                pg.mixer.music.play()
                while pg.mixer.music.get_busy():
                    current_progress += step
                    update_progress(current_progress)
                    continue
                finish_progress()
    except ValueError as e:
        progress_dialog.destroy()
        show_error_message(str(e))
    except Exception as e:
        progress_dialog.destroy()
        show_error_message(f"An error occurred: {e}")

def convert_and_save():
    input_text = text_entry.get("1.0", tk.END).strip()
    selected_language = language_variable.get()
    selected_accent = accent_variable.get()
    output_filename = filedialog.asksaveasfilename(defaultextension=".mp3", filetypes=[("MP3 files", "*.mp3")])
    
    if output_filename:
        speak(input_text, selected_language, selected_accent, output_filename)

def play_audio():
    input_text = text_entry.get("1.0", tk.END).strip()
    selected_language = language_variable.get()
    selected_accent = accent_variable.get()
    speak(input_text, selected_language, selected_accent)

def upload_file():
    file_path = filedialog.askopenfilename(filetypes=[("Text files", "*.txt")])
    if file_path:
        with open(file_path, 'r') as file:
            file_content = file.read()
            text_entry.delete("1.0", tk.END)
            text_entry.insert(tk.END, file_content)

def exit_application():
    root.destroy()

root = tk.Tk()
root.title("Text to Speech Converter")
logo_image = tk.PhotoImage(file="toyotech.png")
root.iconphoto(False, logo_image)

frame = tk.Frame(root)
frame.pack(padx=10, pady=10)

text_entry = tk.Text(frame, height=10, width=50)
text_entry.pack(padx=5, pady=5)

button_frame = tk.Frame(frame)
button_frame.pack(padx=5, pady=5)

play_button = tk.Button(button_frame, text="Play", command=play_audio)
play_button.pack(side=tk.LEFT, padx=2)

convert_button = tk.Button(button_frame, text="Save", command=convert_and_save)
convert_button.pack(side=tk.LEFT, padx=2)

upload_button = tk.Button(button_frame, text="Upload Text File", command=upload_file)
upload_button.pack(side=tk.LEFT, padx=2)

# Get all available languages with language codes
available_languages = lang.tts_langs().keys()

# Label for language selection
language_label = tk.Label(root, text="Select Language:")
language_label.pack(padx=5, pady=1)

# Dropdown menu for language selection
language_variable = tk.StringVar(root)
language_dropdown = tk.OptionMenu(root, language_variable, *available_languages)
language_variable.set("en")  # Default language is English
language_dropdown.pack(padx=5, pady=5)

# Label for accent selection
accent_label = tk.Label(root, text="Select Accent:")
accent_label.pack(padx=5, pady=1)

# Dropdown menu for accent selection
accent_variable = tk.StringVar(root)
accent_dropdown = tk.OptionMenu(root, accent_variable, "com.au", "com.uk", "com.us", "com.ca", "com.in", "com.ie", "com.za", "com.ng")
accent_variable.set("com.au")  # Default accent is Australian English
accent_dropdown.pack(padx=5, pady=5)

exit_button = tk.Button(root, text="Exit", command=exit_application)
exit_button.pack(pady=5)

root.mainloop()
