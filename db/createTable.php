<?php

// sql to create table
    $sql = "
CREATE TABLE Admin (
    admin_username VARCHAR(20) NOT NULL,
    admin_password VARCHAR(20) NOT NULL, 

    PRIMARY KEY(admin_username)
);

CREATE TABLE Member (
    member_id VARCHAR(10) NOT NULL,
    member_name VARCHAR(30) NOT NULL,
    member_ic INT(14) NOT NULL ,
    member_gender VARCHAR(6) NOT NULL ,
    member_dob Date NOT NULL ,
    member_tel Int(12) NOT NULL ,
    member_address VARCHAR(100) NOT NULL,
    recommender_name VARCHAR(30) NOT NULL,
    accept_date Date NOT NULL,
    member_citizenship INT(15) NOT NULL,
    member_job VARCHAR(15) NOT NULL,
    recommender_id VARCHAR(4) NOT NULL,
    member_type VARCHAR(10) NOT NULL,
    remarks VARCHAR(40),

    PRIMARY KEY (member_id)
);


CREATE TABLE Tablet (
    tablet_id INT(10) NOT NULL,
    inst_date DATE NOT NULL,
    ancestor_name VARCHAR(20) NOT NULL ,
    payment_type VARCHAR(20) NOT NULL ,
    receipt_num INT(10) NOT NULL ,
    contact_num1 INT(12) NOT NULL,
    contact_num2 INT(12) NOT NULL,
    remarks VARCHAR(200),
    tablet_zone VARCHAR(10) NOT NULL,
    tablet_tier VARCHAR(10) NOT NULL,   
    tablet_row VARCHAR(10) NOT NULL,
    price Double(10,2) NOT NULL,
    address VARCHAR(100) NOT NULL,
    
    PRIMARY KEY(tablet_id) 
);

CREATE TABLE BLantern (
    BLantern_id INT(10) NOT NULL,
    contact_num INT(12) NOT NULL,
    blessing_price double(10,2) NOT NULL,       
    votive_price double(10,2) NOT NULL,
    remarks VARCHAR(200),
    
    PRIMARY KEY(BLantern_id)
);

CREATE TABLE GLantern(
    GLantern_id INT(10) NOT NULL,       
    contact_num INT(12) NOT NULL,
    remarks VARCHAR(200),
    receipt_num INT(8) NOT NULL,
    receipt_date DATE NOT NULL,

    PRIMARY KEY(GLantern_id)

);


CREATE TABLE Product (
    product_id VARCHAR(10) NOT NULL,
        product_name VARCHAR(20) NOT NULL,
        product_price Double(10,2) NOT NULL ,
        product_description VARCHAR(200),

    PRIMARY KEY(product_id)
);

CREATE TABLE Membership(
    member_id VARCHAR(10) NOT NULL,
    username VARCHAR(20) NOT NULL,
    PRIMARY KEY (member_id, username),
        FOREIGN KEY (username) REFERENCES Admin(admin_username),
        FOREIGN KEY (member_id) REFERENCES Member(member_id)

);

CREATE TABLE Manage(
    username VARCHAR(20) NOT NULL,
    product_id VARCHAR(10) NOT NULL,     
    UpdatedOn DATETIME NOT NULL,  
    PRIMARY KEY (username, product_id),
        FOREIGN KEY (username) REFERENCES Admin(admin_username),        
        FOREIGN KEY (product_id) REFERENCES Product(product_id)

);

CREATE TABLE Stock(
    receipt_num VARCHAR(20) NOT NULL,
    stock_date DATE NOT NULL,
    stock_amount DOUBLE(10,2) NOT NULL, 
    stock_balance DOUBLE(10,2) NOT NULL, 
    stock_remark VARCHAR(200),
    product_id VARCHAR(10) NOT NULL,

    PRIMARY KEY(receipt_num),    
            FOREIGN KEY (product_id) REFERENCES Product(product_id) 
    
);

CREATE TABLE Booking(  
    member_id VARCHAR(10) NOT NULL,
    book_date DATE NOT NULL,
    tablet_id INT(10),
    BLantern_id INT(10),    
    GLantern_id INT(10),

    PRIMARY KEY(member_id),
        FOREIGN KEY (member_id) REFERENCES Member(member_id),
        FOREIGN KEY (tablet_id) REFERENCES Tablet(tablet_id),
        FOREIGN KEY (BLantern_id) REFERENCES BLantern(BLantern_id),
        FOREIGN KEY (GLantern_id) REFERENCES GLantern(GLantern_id)     

);

CREATE TABLE Tablet_Receipt(
    receipt_num VARCHAR(10) NOT NULL,
    receipt_date DATE NOT NULL,
    receipt_amount DOUBLE(10,2) NOT NULL,
    remarks VARCHAR(200),
    member_id VARCHAR(10) NOT NULL,
    tablet_id INT(10) NOT NULL,
    username VARCHAR(20) NOT NULL,

    PRIMARY KEY(receipt_num, receipt_date, member_id, username),        
        FOREIGN KEY (tablet_id) REFERENCES Tablet(tablet_id),        
        FOREIGN KEY (member_id) REFERENCES Member(member_id),
        FOREIGN KEY (username) REFERENCES Admin(admin_username)    

);

CREATE TABLE BLantern_Receipt (
    BLantern_id INT(10) NOT NULL,
    B_receipt_num VARCHAR(8) NOT NULL,
    V_receipt_num VARCHAR(8) NOT NULL,  
    receipt_date DATE NOT NULL, 
    receipt_amount DOUBLE(10,2) NOT NULL,
    remarks VARCHAR(200),   
    member_id VARCHAR(10) NOT NULL, 
    username VARCHAR(20) NOT NULL,

    
    PRIMARY KEY(BLantern_id, B_receipt_num, V_receipt_num,receipt_date, username),
        FOREIGN KEY (BLantern_id) REFERENCES BLantern(BLantern_id),         
        FOREIGN KEY (username ) REFERENCES Admin(admin_username)    
);
 
CREATE TABLE GLantern_Receipt (
    GLantern_id INT(10) NOT NULL,
    receipt_num INT(8) NOT NULL,    
    receipt_date DATE NOT NULL, 
    receipt_amount DOUBLE(10,2) NOT NULL,
    remarks VARCHAR(200),   
    member_id VARCHAR(10) NOT NULL, 
    username VARCHAR(20) NOT NULL,

    
    PRIMARY KEY(GLantern_id, receipt_num,receipt_date, username),
        FOREIGN KEY (GLantern_id) REFERENCES GLantern(GLantern_id),         
        FOREIGN KEY (username ) REFERENCES Admin(admin_username)    
); 
"; 
if (mysqli_query($conn, $sql)) {
    echo "Management System table detail created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
/*

*/
?>