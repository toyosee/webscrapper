import tkinter as tk
from tkinter import ttk
from ttkthemes import ThemedTk
from tkinter import messagebox
import json
import csv

import requests
from bs4 import BeautifulSoup

domain = "https://"


def validate_url(url):
    if url.startswith("http://") or url.startswith("https://"):
        return url
    else:
        return domain + url


def scrape_data():
    url = url_entry.get()
    url = validate_url(url)  # Ensure URL starts with https://

    try:
        response = requests.get(url)
        print(f"Response status code: {response.status_code}")  # Debugging line
        soup = BeautifulSoup(response.content, "html.parser")

        if clone_var.get() == 1:  # Clone the entire page
            element_type = "all"  # Set element_type to "all" for entire page scraping
        else:
            element_type = element_dropdown.get()

        class_name = class_entry.get()  # Optional class name input

        # Find elements based on the specified type and class (if provided)
        if class_name:
            elements = soup.find_all(element_type, class_=class_name)
        else:
            elements = soup.find_all(element_type)

        # Create a dictionary to store scraped data (text content and links)
        scraped_dict = {}
        for element in elements:
            if element.name == "a":
                scraped_dict[element.text] = element.get("href")
            else:
                scraped_dict[element.text] = None

        # Display the scraped data
        data_text.delete(1.0, tk.END)
        for text, link in scraped_dict.items():
            if link:
                data_text.insert(tk.END, f"{text} ({link})\n")
            else:
                data_text.insert(tk.END, f"{text}\n")

    except Exception as e:
        messagebox.showerror("Error", f"An error occurred: {str(e)}")


def export_data():
    data_dict = {}
    data = data_text.get(1.0, tk.END)

    try:
        lines = data.splitlines()
        for line in lines:
            if "(" in line and ")" in line:
                elements = line.split(" (", 1)
                if len(elements) == 2:
                    element, link = elements
                    link = link[:-1]  # Remove closing parenthesis
                    data_dict[element] = link
                else:
                    data_dict[line] = None
            else:
                data_dict[line] = None

        export_format = export_dropdown.get()
        if export_format == "CSV":
            with open("scraped_data.csv", "w", newline="") as csv_file:
                writer = csv.writer(csv_file)
                writer.writerow(["Element", "Link"])
                for element, link in data_dict.items():
                    writer.writerow([element, link])

        elif export_format == "HTML":
            with open("scraped_data.html", "w") as html_file:
                html_file.write("<html>\n<head>\n<title>Scraped Links</title>\n")
                html_file.write(
                    "<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>\n"
                )
                html_file.write("<style>\n")
                html_file.write("body {\nfont-family: 'Roboto', sans-serif;\n}\n")
                html_file.write("table {\nborder-collapse: collapse;\nwidth: 100%;\n}\n")
                html_file.write("th, td {\nborder: 1px solid black;\npadding: 8px;\n}\n")
                html_file.write("th {\nbackground-color: #f2f2f2;\n}\n")
                html_file.write("</style>\n")
                html_file.write("</head>\n<body>\n")
                html_file.write("<h1>Scraped Data</h1>\n")
                html_file.write("<table>\n<tr><th>Element</th><th>Link</th></tr>\n")
                for element, link in data_dict.items():
                    html_file.write(f"<tr><td>{element}</td><td>{link}</td></tr>\n")
                html_file.write("</table>\n</body>\n</html>")

        elif export_format == "TXT":
            with open("scraped_data.txt", "w") as txt_file:
                for element, link in data_dict.items():
                    if link:
                        txt_file.write(f"{element}: {link}\n")
                    else:
                        txt_file.write(f"{element}\n")
        elif export_format == "JSON":
            with open("scraped_data.json", "w") as json_file:
                json.dump(data_dict, json_file, indent=4)

        messagebox.showinfo(
            "Export Successful", f"Data exported to scraped_data.{export_format.lower()}"
        )

    except Exception as e:
        messagebox.showerror("Error", f"Error exporting data: {str(e)}")


def shorten_url():
    # Implement your URL shortener logic here
    pass


# Create the main application window
root = tk.Tk()
logo_image = tk.PhotoImage(file="toyotech.png")
root.iconphoto(False, logo_image)
root.title("Scraper")
root.geometry("500x800")  # Set an appropriate window size

# # Create a canvas with a vertical scrollbar
# canvas = tk.Canvas(root)
# scrollbar = ttk.Scrollbar(root, orient="vertical", command=canvas.yview)
# root = ttk.root(canvas)

# # Configure canvas scrolling
# canvas.configure(yscrollcommand=scrollbar.set)
# canvas.pack(side="left", fill="both", expand=True)
# scrollbar.pack(side="right", fill="y")
# canvas.create_window((0, 0), window=root, anchor="")

# URL input
url_label = tk.Label(root, text="Enter URL:")
url_label.pack()

url_entry = tk.Entry(root, width=50)
url_entry.pack()

# Radio buttons for cloning options
clone_var = tk.IntVar()
clone_button = tk.Radiobutton(root, text="Clone Entire Page", variable=clone_var, value=1)
clone_button.pack()

specific_button = tk.Radiobutton(root, text="Scrape Specific Elements", variable=clone_var, value=0)
specific_button.pack()

# Element type dropdown
element_label = tk.Label(root, text="Select Element Type:")
element_label.pack()

# Style the dropdown
style = ttk.Style()
style.configure("TCombobox", padding=5, font=("Helvetica", 12))  # Customize font and padding
style.map("TCombobox", fieldbackground=[("readonly", "white")])

element_types = ["all", "body", "div", "p", "h1", "h2", "h3", "h4", "h4 a", "h5", "h6", "span", "a", "ul"]  # Customize this list as needed
element_dropdown = ttk.Combobox(root, values=element_types)
element_dropdown.pack()

# Optional class name input
class_label = tk.Label(root, text="Enter Class Name (Optional):")
class_label.pack()

class_entry = tk.Entry(root, width=50)
class_entry.pack()

# Scrape Data button
scrape_button = tk.Button(root, text="Scrape Data", pady="3", borderwidth=3, command=scrape_data)
scrape_button.pack()

# Horizontal rule
hr = ttk.Separator(root, orient='horizontal')
hr.pack(fill='x')

# Display scraped data
data_text = tk.Text(root, height=20, width=50)
data_text.pack()

# Export format dropdown
export_label = tk.Label(root, text="Export Format:")
export_label.pack()

export_formats = ["CSV", "HTML", "TXT", "JSON"]
export_dropdown = ttk.Combobox(root, values=export_formats)
export_dropdown.pack()

# Export Data button
export_button = tk.Button(root, text="Export Data", pady="3", borderwidth=3, command=export_data)
export_button.pack()


# Exit button
exit_button = tk.Button(root, text="Exit", pady="3", borderwidth=3, command=root.destroy)
exit_button.pack()

# Run the application
root.mainloop()
