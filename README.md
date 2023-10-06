# Cafeteria-WebApp
This is the Cafeteria Web Application i developed for Engine factory Avadi

**Login Page:
**

![image](https://github.com/Roshan-Ravindran/Cafeteria-WebApp/assets/77664931/627c4467-eb37-4da9-aed5-610fcdd32e74)

This page is where the admin accesses the canteen management system through login Id and password. Passwords are only known to the admin of the canteen. When correct login Id and password is entered, the credentials are compared with the database table, if they are a match, then the user is admitted to enter the webpage. The webpage redirects to the menu page.

**Menu page:
**

![image](https://github.com/Roshan-Ravindran/Cafeteria-WebApp/assets/77664931/29bdd759-816e-4efc-923e-5060b87fc0d9)

●	This is the page where order creation takes place. It also has a navigation header bar on all webpages which helps in easier navigation to different modules on the canteen system. It also provides the option to change password whenever required. Logout can be done when exiting the application. 

●	Employee details is a select option where the options are all employees at EFA. the options are loaded dynamically every time the page refreshes, this makes the select option to be updated every time it is accessed. It is also provided with search option for easier finding of employees. The options are filled with permanent number, name and section name, this eliminates the confusion of employees with same names.

●	Other text fields are provided for other staff members who don't have a permanent number for their own.

●	The items are loaded from the products table under their respective category. Quantity column, is where the number items required for each order is entered. The buttons on either side of the text field is for adding or subtracting the quantity by 1. The amount column shows the total amount for the respective items in the row. The amount column is dynamically updated when the quantity is entered.

●	Total amount is summation of all items amount to a grand total.

●	Create order button saves the quantity entered for each item. Items with 0 quantity are ignored. It also collects the employee details entered along with the time when the order button is pressed. A dialog box appears asking for order confirmation with the summary of items and quantity with total amount. When pressed ‘OK’ the order is placed and the order id is displayed. If pressed ‘cancel’, the order is cancelled.

●	Clear button clears all fields and displays a fresh page.

 

**Order history:
**

![image](https://github.com/Roshan-Ravindran/Cafeteria-WebApp/assets/77664931/2233d5db-4ffd-4a12-bcd4-bbe3acebfb05)

●	This module contains the details of all orders placed within a specified interval date period. The date option at the start of the page gives the user a filter option to display the orders between certain time interval. 

●	The data shown contains serial number, order number, Permanent number, items with their respective quantity, total amount to be paid, order date and time, status of the order - whether the order is been issued to the customer or not, delete option, and printing the bill.
 

**Manage categories:
**

![image](https://github.com/Roshan-Ravindran/Cafeteria-WebApp/assets/77664931/16977db9-a736-438d-8483-4a6ff7471133)

These are categories where items are added under each category. For example omm podi is added under snacks order, jangri will be added under sweets category. Each category name is given an unique Id. the name of the category can be edited as well. Deletion of categories can also be done.
 

**Add Category:
**

![image](https://github.com/Roshan-Ravindran/Cafeteria-WebApp/assets/77664931/751471f0-9346-4668-bae7-91c677165451)

New categories can also be added to the category list. A unique id will be allotted for the newly created category.
 

**Manage products:
**

![image](https://github.com/Roshan-Ravindran/Cafeteria-WebApp/assets/77664931/f097b665-dff6-4c62-a056-fbea377b5b3b)

In this module, all the products are displayed along with their category name and weight in which each item is sold, the rate for each item for quantity of 1,edit product details, status is where the item is displayed on the menu only if they are confirmed, and hidden if they are not confirmed. This allows the admins to dynamically edit the sales information whenever they want. Raw materials is where the admin adds raw materials required to make the item. They specifythe basic amount of raw materials required for a specified weight, which then the web app calculates the amount of raw materials required for total orders received for the respective item.
 

**Add Item:
**

![image](https://github.com/Roshan-Ravindran/Cafeteria-WebApp/assets/77664931/2dc6f272-5d6c-4ff7-9819-1b09a1b43c8d)

New items can be added, which will be displayed in the product list page and as well as menu page. Rate and weight specified here will be used to calculate summary in the summary webpage.

 


**Edit product:
**

![image](https://github.com/Roshan-Ravindran/Cafeteria-WebApp/assets/77664931/ee7d0ef0-19d0-494d-9710-ef592c515330)

Products can be edited here, but the name of the item should not be changed to another item name, this leads to inconsistency while data retrieval and calculations.
 

**Order summary:
**

![image](https://github.com/Roshan-Ravindran/Cafeteria-WebApp/assets/77664931/c01500a6-13b8-4e72-96cf-ba63ed56f926)

●	This is where the summary of all orders created within a specified date interval in displayed. Total number of orders is displayed for each and every item name. 

●	The respective total amount for item name is also calculated and displayed. 

●	Total orders weight for the item name is also calculated with the help of grams/packet with total orders.



**Print ticket:
**

![image](https://github.com/Roshan-Ravindran/Cafeteria-WebApp/assets/77664931/22aa1932-7862-4cb6-b0d7-40f9714454d9)

Ticket is printed when the print option is clicked on with all the necessary details required for the customer and admin.


**ADVANTAGES OF CANTEEN MANAGEMENT SYSTEM
**

●	Each and every order placed will be stored in the database tables for automatic calculation.

●	To increase efficiency of managing the Canteen, Sales. 

●	It also deals with monitoring the information and transactions of Items. 

●	It tracks all the information of Sales, Food, Items etc.
