import re
from collections import defaultdict
from datetime import datetime, timedelta
import matplotlib.dates
import matplotlib.pyplot as plt
from operator import itemgetter
import tkinter as tk
from tkinter import filedialog

#--------------------------------------#
#select dates#

def parse_dates_and_hours(file_path):
    dates_and_hours = []
    
    with open(file_path, "r") as file:
        lines = file.readlines()
        
        for line in lines:
            date_and_hour = re.search(r"\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}", line)
            if date_and_hour:
                dates_and_hours.append(date_and_hour.group(0))
                
    return dates_and_hours

#--------------------------------------#
#convert in datetime type, counts and group dates#

def group_by_hour(dates_and_hours):
    hour_count = defaultdict(int)
    
    for date_and_hour in dates_and_hours:
        date = datetime.strptime(date_and_hour, "%Y-%m-%d %H:%M:%S")
        hour = date.strftime("%Y-%m-%d %H")
        hour_count[hour] += 1
        
    grouped_dates_and_hours = [[hour, count] for hour, count in hour_count.items()]
    grouped_dates_and_hours.sort(key=lambda x: x[0])
    
    return grouped_dates_and_hours

#--------------------------------------#
#sort by dates#

def sort_by_date(data):
    return sorted(data, key=lambda x: x[0])

#--------------------------------------#
#French UTC#

def utc(data):
    result = []
    for item in data:
        date = datetime.strptime(item[0], '%Y-%m-%d %H')
        date = date + timedelta(hours=6)
        result.append([date.strftime('%Y-%m-%d %H'), item[1]])
    return result

#--------------------------------------#
#sum the dates#

def sum_y_values(data):
    result = []
    sum = 0
    for item in data:
        sum += item[1]
        result.append([item[0], sum])
    return result

#--------------------------------------#
#convert data in ready-to-plot lists#

def extract_xy_values(data):
    x_values = []
    y_values = []
    
    for item in data:
        x_values.append(item[0])
        y_values.append(item[1])
        
    return x_values, y_values

#--------------------------------------#
#plot data#

def plot_xy_values(x_values, y_values):
    plt.plot(x_values, y_values)
    plt.grid()
    plt.xlabel("Date and time")
    plt.ylabel("Number of signatories")
    plt.title("Number of signatories for each date and time")
    plt.xticks(rotation=45)
    plt.tight_layout()
    plt.show()

#--------------------------------------#
#-------------M-A-I-N------------------#
#--------------------------------------#

def main():

    #Read the file
    root = tk.Tk()
    root.withdraw()
    file = filedialog.askopenfilename(initialdir = ".", title = "Select file")
    root.destroy()

    #processing
    dates_and_hours = parse_dates_and_hours(file)
    print("dates"+dates_and_hours)
    grouped_dates_and_hours = group_by_hour(dates_and_hours)
    print("grouped"+grouped_dates_and_hours)
    sorted_dates_and_hours = sort_by_date(grouped_dates_and_hours)
    print("sorted"+sorted_dates_and_hours)
    utc_dates_and_hours = utc(sorted_dates_and_hours)
    print("utc"+utc_dates_and_hours)
    summed_dates_and_hours = sum_y_values(utc_dates_and_hours)
    x_values, y_values = extract_xy_values(summed_dates_and_hours)

    #render
    plot_xy_values(x_values,y_values)

if __name__ == "__main__":
    main()