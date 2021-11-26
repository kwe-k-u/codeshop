
DROP DATABASE code_shop;

CREATE DATABASE code_shop;
USE code_shop;


-- Parent user table
CREATE TABLE  users (
	user_id int AUTO_INCREMENT,
	username varchar(50) NOT NULL,
	email varchar(100) NOT NULL UNIQUE,
	password varchar(255) NOT NULL,
	PRIMARY KEY (user_id)

);


-- creating stock users
INSERT INTO users (username, email, password) values
("shelly","shelly@gmail.com", "kjhbutQWED55?/"),
("Digny","digny@gmail.com", "Bjhyuirt6754+"),
("Kweku","kweku@gmail.com", "BhjGfrd098?"),
("Nii","nii@gmail.com","rajljkYu0."),
("Naa","naa@gmail.com", "Fore3899>"),
("Kwame","kwame@gmail.com", "F8696899>");


--  developer table
CREATE TABLE developers (
	user_id INT,
	PRIMARY KEY (user_id),
	FOREIGN KEY (user_id) references users (user_id)
);


-- creating stock developers
INSERT INTO developers values
(1),
(2),
(3);




--  buyers table
CREATE TABLE buyers (
	user_id INT,
	PRIMARY KEY (user_id),
	FOREIGN KEY (user_id) references users (user_id)
);


-- creating stock developers
INSERT INTO buyers values
(4),
(5),
(6);



-- code table
CREATE TABLE code (
	code_id INT AUTO_INCREMENT,
	language VARCHAR(40) NOT NULL,
	upload_date DATE NOT NULL,
	file_location VARCHAR(150) NOT NULL,
	PRIMARY KEY (code_id)
);


-- creating stock code
INSERT INTO code (language,upload_date,file_location) VALUES
("JAVA","2018-01-01", ""),
("HTML","2019-07-04", ""),
("Python","2019-11-01",""),
("java Script","2019-12-17", "");

-- table to keep track of the code listing details
CREATE TABLE listing (
	listing_id INT NOT NULL,
	title VARCHAR(100) NOT NULL,
	description TEXT NOT NULL,
	short_description TINYTEXT,
	price FLOAT NOT NULL,
	PRIMARY KEY (listing_id)

);

INSERT INTO listing (listing_id, title, description, short_description,price) VALUES
(1,"website code","this is a website...","", 599.00),
(2,"app design template code","it helps with easy...","", 250.00),
(3,"Inventory management app for eccorment build with flutter","for developing a wor management application with your deied functionalities", "", 900.00),
(4,"movie streaming site","an online movie streamin site that....","", 100.00);

-- table to keep track of Code_ownership
CREATE TABLE code_ownership(
	developer_id INT NOT NULL,
	code_id INT NOT NULL UNIQUE,
	listing_id INT NOT NULL,
	foreign key (developer_id) references developers (user_id),
	foreign key (code_id) references code (code_id),
	foreign key (listing_id) references listing (listing_id),
	primary key (developer_id, code_id)
);

INSERT INTO code_ownership values
(1,1,1),
(2,2,2),
(3,3,3);

-- table for code screenshots in listing
CREATE TABLE listing_images (
	image_id int AUTO_INCREMENT,
	image_location VARCHAR (100) NOT NULL,
	listing_id INT,
	FOREIGN KEY (listing_id) references listing (listing_id),
	PRIMARY KEY (image_id)
);


-- stock images
INSERT INTO listing_images(image_location, listing_id) VALUES
("",1),
("",2),
("",2),
("",3),
("",4),
("",4);


-- table to track listing reviews
CREATE TABLE reviews(
	review_id INT AUTO_INCREMENT,
	reviewer_id int,
	listing_id int,
	creation_date date,
	content tinytext,
	rating enum("1","2","3","4","5"),
	PRIMARY KEY (review_id),
	FOREIGN KEY (reviewer_id) REFERENCES buyers(user_id),
	FOREIGN KEY (listing_id) REFERENCES listing(listing_id)
);

-- table to track order requests
CREATE TABLE order_table(
	order_id INT AUTO_INCREMENT,
	order_date DATE,
	listing_id INT,
	buyer_id INT,

	PRIMARY KEY (order_id),
	FOREIGN KEY(listing_id) references listing (listing_id),
	FOREIGN KEY(buyer_id) references buyers (user_id)
);

INSERT INTO order_table (listing_id, buyer_id, order_date) VALUES
(1,4, "2018-12-12" ),
(2,5, "2019-01-01" ),
(3,5, "2018-01-01" ),
(4,6, "2017-01-01" );


-- table to track transactions
CREATE TABLE transactions (
	transaction_id INT AUTO_INCREMENT,
	order_id INT,
	recipient_id INT,
	sender_id INT,
	amount DOUBLE,
	transaction_date DATE,
	PRIMARY KEY (transaction_id),
	FOREIGN KEY (order_id) references order_table(order_id),
	FOREIGN KEY (sender_id) references users(user_id),
	FOREIGN KEY (recipient_id) references users(user_id)
);


INSERT INTO transactions (order_id, recipient_id, sender_id, amount, transaction_date)
 VALUES
(1,1,4, 500.25, "2018-12-12" ),
(2,2,5, 250.00, "2019-01-01" ),
(3,3,5, 366.90, "2018-01-01" ),
(4,4,6, 456.25, "2017-01-01" );



-- table for claims about transactions
CREATE TABLE claims(
	claim_id int AUTO_INCREMENT,
	email varchar(50) NOT NULL,
	description TINYTEXT NOT NULL,
	PRIMARY KEY (claim_id)
);




-- table for reports about code
CREATE TABLE reports(
	report_id int AUTO_INCREMENT,
	email varchar(50) NOT NULL,
	description TINYTEXT NOT NULL,
	url varchar(150),
	PRIMARY KEY (report_id)
);