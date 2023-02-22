import re
import matplotlib.pyplot as plt
import collections
import tkinter as tk
from tkinter import filedialog

def get_cities(data):
    cities = re.findall("'([A-Za-z]+)', \d{2}", data)
    return cities

def plot_pie_chart(cities):
    city_counts = collections.Counter(cities)
    city_names = list(city_counts.keys())
    city_counts = list(city_counts.values())

    plt.pie(city_counts, labels=city_names, autopct='%1.1f%%')
    plt.axis('equal')
    plt.show()

# Read the SQL file and extract the lines containing the cities
import tkinter as tk
from tkinter import filedialog

# Open the SQL data file
#Read the file
root = tk.Tk()
root.withdraw()
file = filedialog.askopenfilename(initialdir = ".", title = "Select file")
root.destroy()

with open(file, 'r') as f:
    data = f.read()
    
cities = get_cities(data)
plot_pie_chart(cities)