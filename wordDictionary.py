import tkinter as tk
from tkinter import messagebox
from tkinter import ttk
from PyDictionary import PyDictionary
import json

dictionary = PyDictionary()

def search_word():
    word = word_entry.get()
    try:
        meaning = dictionary.meaning(word)
        meaning_text.delete(1.0, tk.END)  # Clear previous text
        if meaning:
            meaning_text.insert(tk.END, f"{word.upper()}\n- Meaning:\n{meaning}\n\n")
            synonyms = dictionary.synonym(word)
            antonyms = dictionary.antonym(word)
            if synonyms:
                meaning_text.insert(tk.END, f"Synonyms: {', '.join(synonyms)}\n")
            if antonyms:
                meaning_text.insert(tk.END, f"Antonyms: {', '.join(antonyms)}\n")
            
            # Example of usage
            example = dictionary.meaning(word).popitem()[1][0]
            meaning_text.insert(tk.END, f"\nExample: {example}")
        else:
            messagebox.showinfo("No Result", f"No result found for the given word.\nEnter a word or check your internet connection")
    except Exception as e:
        messagebox.showerror("Error", f"An error occurred: {e}")

def export():
    export_format = export_var.get()
    if export_format == "txt":
        export_as_txt()
    elif export_format == "json":
        export_as_json()

def export_as_txt():
    meaning = meaning_text.get(1.0, tk.END)
    with open("meaning.txt", "w") as file:
        file.write(meaning)
    messagebox.showinfo("Export", "Text exported successfully.")

def export_as_json():
    word = word_entry.get()
    try:
        meaning = dictionary.meaning(word)
        if meaning:
            with open("meaning.json", "w") as file:
                json.dump(meaning, file)
            messagebox.showinfo("Export", "JSON exported successfully.")
        else:
            messagebox.showinfo("No Result", "No result found for the given word.")
    except Exception as e:
        messagebox.showerror("Error", f"An error occurred: {e}")

# Tkinter setup
root = tk.Tk()
root.title("Dictionary")
logo_image = tk.PhotoImage(file="toyotech.png")
root.iconphoto(False, logo_image)

# Widgets
word_label = tk.Label(root, text="Enter word to search for:")
word_label.pack()

word_entry = tk.Entry(root)
word_entry.pack()

search_button = tk.Button(root, text="Search", command=search_word)
search_button.pack()

meaning_text = tk.Text(root, height=10, width=50)
meaning_text.pack()

export_label = tk.Label(root, text="Export as:")
export_label.pack()

export_var = tk.StringVar(root)
export_dropdown = ttk.Combobox(root, textvariable=export_var, values=["txt", "json"])
export_dropdown.pack()

export_button = tk.Button(root, text="Export", command=export)
export_button.pack()

root.mainloop()
