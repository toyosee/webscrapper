import tkinter as tk
from tkinter import messagebox
import webbrowser
import requests
import pyshorteners as short

def shorten_url():
    url = entry.get()
    if url:
        shortened_url = short_url(url)
        if shortened_url:
            shortened_entry.delete(1.0, tk.END)
            shortened_entry.insert(tk.END, shortened_url)
            clickable_link.config(text=shortened_url, cursor="hand2")
            clickable_link.bind("<Button-1>", lambda event: open_link(shortened_url))
        else:
            messagebox.showerror("Error", "Unable to shorten URL.")
    else:
        messagebox.showwarning("Warning", "Please enter a URL.")

def short_url(url):
    try:
        s = short.Shortener()
        return s.tinyurl.short(url)
    except Exception as e:
        print(e)
        return None

def open_link(url):
    webbrowser.open(url)

def get_final_url(url):
    try:
        response = requests.head(url, allow_redirects=True)
        final_url = response.url
        return final_url
    except Exception as e:
        print(e)
        return None

root = tk.Tk()
root.title("URL Shortener")
logo_image = tk.PhotoImage(file="toyotech.png")
root.iconphoto(False, logo_image)
root.geometry("550x150")

label = tk.Label(root, text="Enter URL:")
label.grid(row=0, column=0, padx=10, pady=10)

entry = tk.Entry(root, width=40)
entry.grid(row=0, column=1, padx=10, pady=10)

button = tk.Button(root, text="Shorten", command=shorten_url)
button.grid(row=0, column=2, padx=10, pady=10)

shortened_label = tk.Label(root, text="Shortened URL:")
shortened_label.grid(row=1, column=0, padx=10, pady=10)

shortened_entry = tk.Text(root, height=1, width=40)
shortened_entry.grid(row=1, column=1, padx=10, pady=10)

clickable_link = tk.Label(root, text="", fg="blue", cursor="arrow")
clickable_link.grid(row=2, column=1, padx=10, pady=10)

root.mainloop()
