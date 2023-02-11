import re
import matplotlib.pyplot as plt
import collections
import random

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

cities = ['Paris', 'Lyon', 'Marseille', 'Lille', 'Nice', 'Bordeaux', 'Toulouse', 'Nantes', 'Strasbourg', 'Montpellier']

french_cities = [random.choice(cities) for i in range(500)]

print(french_cities)

cities = get_cities(french_cities)
plot_pie_chart(cities)
