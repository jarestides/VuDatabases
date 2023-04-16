Create Table UnivProfile (
	univ_id INT,
	Name VARCHAR(40),
	user_id	INT,
	Description	TEXT,
	numberOfStudents INT,
	Primary Key (u_id),
	Foreign Key (user_id) References SuperAdmin (user_id) ON DELETE CASCADE,
	CHECK (numberOfStudents > 0))
	ENGINE=InnoDB;

Create Table SuperAdmin (
	user_id INT,
	password VARCHAR(20))

Create Table Users (
	user_id INT,
   	fname VARCHAR(25),
    	lname VARCHAR(25),
	password VARCHAR(25),
	email VARCHAR (25),
    	univ_id INT, 
	user_type INT,
	Primary Key (user_id, univ_id),
	Foreign Key (univ_id) References UnivProfile (univ_id) ON DELETE CASCADE)
	ENGINE=InnoDB;

Create Table RSO (
	RSO_id	INT,
	Name VARCHAR (26),
	Description	TEXT,
	Primary Key (RSO_id))
	ENGINE=InnoDB;

Create Table Events (
	Event_id INT,
	Name VARCHAR(100),
    	Type VARCHAR(25),
   	Start_date VARCHAR(25),
    	End_date VARCHAR(25),
    	Description	TEXT,
    	Primary Key(Event_id))
    	ENGINE=InnoDB;
