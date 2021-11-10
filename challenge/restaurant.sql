/*Database*/
CREATE DATABASE restaurant DEFAULT CHARACTER SET utf8;

/*Dishes*/
CREATE TABLE dishes(
   dishID int AUTO_INCREMENT PRIMARY KEY,
   img VARCHAR(100),
   Dname VARCHAR(50),
   price DECIMAL(6,2),
   meal_desc VARCHAR(100)
)

/*Fill the TABLE*/
INSERT INTO dishes
VALUES
(1, "img/beaf.jpg", "Beaf-Sparagus", 9.90, "Beafsteak with grilled Asparagus"),
(2, "img/salmon.jpg", "Veggy Salmon", 8.5, "Fresh Salad with grilled Salmon"),
(3, "img/breakfast.jpg", "Breakfast", 6.5, "Fried eggs with Hamm, fresh bread and Salad"),
(4, "img/eclair.jpg", "Dessert", 5.5, "Delicios Eclair with Cream and Strawberries");