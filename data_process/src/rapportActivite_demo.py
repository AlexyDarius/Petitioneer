import re
from collections import defaultdict
from datetime import datetime, timedelta
import matplotlib.dates
import matplotlib.pyplot as plt
from operator import itemgetter
import random

from rapportActivite import parse_dates_and_hours, group_by_hour, sort_by_date, sum_y_values, extract_xy_values, plot_xy_values

#--------------------------------------#
#-------------R-A-N-D------------------#
#--------------------------------------#

def generate_random_list():
    start = datetime(2023, 2, 1, 1)
    end = datetime(2023, 2, 11, 23)
    date_list = []
    for i in range(100):
        date = start + timedelta(seconds=random.randint(0, int((end - start).total_seconds())))
        #random int with big variance
        random_int = int(random.gauss(50, 50))
        #only positive int
        if random_int <= 0:
            random_int = 0
        #simulate night
        if date.hour >= 23 and date.hour <= 7:
            random_int = random_int // 4
        date_list.append([date, random_int])
    return date_list

#--------------------------------------#
#-------------M-A-I-N------------------#
#--------------------------------------#

def main():
    #random data for test
    random_date = generate_random_list()
    sorted_dates_and_hours = sort_by_date(random_date)
    summed_dates_and_hours = sum_y_values(sorted_dates_and_hours)
    x_values, y_values = extract_xy_values(summed_dates_and_hours)
    plot_xy_values(x_values,y_values)

if __name__ == "__main__":
    main()