import matplotlib.pyplot as plt
import numpy as np

random_list1 = np.random.normal(loc=25, scale=10, size=5000).round().astype(int)
random_list2 = np.random.normal(loc=55, scale=10, size=5000).round().astype(int)
random_list_aged1 = [age for age in random_list1 if age >= 16 and age <= 88]
random_list_aged2 = [age for age in random_list2 if age >= 16 and age <= 88]
random_list = random_list_aged1+random_list_aged2

unique_elements, counts_elements = np.unique(random_list, return_counts=True)

plt.bar(unique_elements, counts_elements)
plt.xlabel("Age")
plt.ylabel("Number of Occurrences")
plt.title("Histogram of the Number of Occurrences of Each Age")
plt.show()
