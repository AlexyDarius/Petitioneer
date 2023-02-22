import random
import matplotlib.pyplot as plt

# List of 10 possible cities
cities = ["Paris", "Lyon", "Marseille", "Toulouse", "Nice", "Nantes", "Strasbourg", "Montpellier", "Bordeaux", "Lille"]

# Generate a list of 500 random cities
city_list = [random.choice(cities) for i in range(500)]

# Add 500 occurrences for Toulouse, 300 occurrences for Paris and 150 occurrences for Bordeaux
city_list = city_list + ['Toulouse'] * 300 + ['Paris'] * 180 + ['Bordeaux'] * 90

# Count the number of occurrences of each city
city_counts = {city: city_list.count(city) for city in city_list}

# Get the total number of cities
total_cities = len(city_list)

# Calculate the percentage of each city
city_percentage = {city: count / total_cities * 100 for city, count in city_counts.items()}

# Group cities with less than 5% of the total occurrences into an "other" category
other = 0
other_cities = []
for city, percentage in city_percentage.items():
    if percentage < 5:
        other += percentage
        other_cities.append(city)

for city in other_cities:
    del city_percentage[city]

city_percentage['other'] = other

# Plot the cities and "other" category in a pie chart
labels = list(city_percentage.keys())
sizes = list(city_percentage.values())

fig1, ax1 = plt.subplots()
ax1.pie(sizes, labels=labels, autopct='%1.1f%%')
ax1.axis('equal')

plt.show()