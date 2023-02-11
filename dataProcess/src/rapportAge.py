import re
import matplotlib.pyplot as plt
import tkinter as tk
from tkinter import filedialog

# Open the SQL data file
#Read the file
root = tk.Tk()
root.withdraw()
file = filedialog.askopenfilename(initialdir = ".", title = "Select file")
root.destroy()

with open(file, "r") as file:
    data = file.read()

# Use regular expression to extract the ages from the data
ages = re.findall(r", (\d{2})", data)

# Count the occurrences of each age
age_counts = {}
for age in ages:
    if age not in age_counts:
        age_counts[age] = 0
    age_counts[age] += 1

# Plot the histogram
x = list(age_counts.keys())
y = list(age_counts.values())
plt.bar(x, y)
plt.xlabel("Age")
plt.ylabel("Occurrences")
plt.title("Histogram of Ages")
plt.show()
plt.show()