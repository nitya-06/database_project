create database db_project;
use db_project;
create table Student(Name varchar(50), RollNo varchar(50) primary key, Email varchar(100),Password varchar(50), Gender varchar(10),dob date, degree varchar(50), branch varchar(50),batch_year int, Interest varchar(100), Ctc int);
create table Student_marks(RollNo varchar(50), 10th_marks int, 12th_marks int, cpi int, foreign key(RollNo) references Student(RollNo));
create table Company(Company_name varchar(50), Email varchar(50) primary key, Password varchar(50), mode_interview varchar(50), c_field varchar(50), recrting_since int, ctc int, Interest varchar(100));
create table Company_marks(Email varchar(50), 10th_marks int, 12th_marks int, cpi int, foreign key(Email) references Company(Email));
create table Alumni (Name varchar(50), Email varchar(50), Password varchar(50), Gender varchar(10),Company_name varchar(50),RollNo varchar(50) primary key,Ctc int, degree varchar(50), branch varchar(50),batch_year int, area_of_working varchar(50), Location varchar(50), working_tenure int);
create table Alumni_marks(RollNo varchar(50), 10th_marks int, 12th_marks int, cpi int, foreign key(RollNo) references Alumni(RollNo));

alter table Alumni_marks modify column cpi float(2);
alter table Student_marks modify column cpi float(2);
alter table Company_marks modify column cpi float(2);

alter table Alumni add UNIQUE(Email);
alter table Student add UNIQUE(Email);
alter table Company add UNIQUE(Email);

//for populating tables using csv file

mysql> SET GLOBAL local_infile=1;

mysql> quit

mysql --local-infile=1 -u root -p

LOAD DATA LOCAL INFILE "C:/Users/ASHUTOSH KR SINGH/Downloads/company_marks.csv"
INTO TABLE Company_marks
FIELDS TERMINATED BY ','
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;