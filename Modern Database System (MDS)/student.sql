use college_student;

create table student (
id int(10) NOT NULL auto_increment,
name varchar(30) NOT NULL,
dept varchar(20) NOT NULL,
class varchar(20) NOT NULL,
rollno int(5) NOT NULL,
gender varchar(6) NOT NULL,
contact_number bigint(10) NOT NULL,
address text,
email_id varchar(30) NOT NULL,
primary key(id));

INSERT INTO student VALUES (1,'nht','CSE','BE',58,'male',8520741096,'aurangabad','nftgmail.com');
INSERT INTO student VALUES (2,'abc','CSE','BE',56,'male',9876543210,'pusad','abc@gmail.com');
INSERT INTO student VALUES (3,'cde','CSE','BE',5,'male',1234567890,'jalna','cde@gmail.com');
INSERT INTO student VALUES (4,'wer','CSE','BE',47,'male',5343789412,'solapur','wer@gmail.com');
INSERT INTO student VALUES (5,'ght','CSE','BE',52,'male',1478963201,'solapur','ght@gmail.com');
INSERT INTO student VALUES (6,'rks','CSE','BE',42,'male',1478963202,'solapur','rks@gmail.com');
INSERT INTO student VALUES (7,'ask','CSE','BE',46,'male',9632587410,'solapur','ask@gmail.com');
INSERT INTO student VALUES (8,'hgt','CSE','BE',53,'male',9698712563,'solapur','hgt@gmail.com');
INSERT INTO student VALUES (9,'vbn','CSE','BE',73,'male',9698712463,'solapur','vbn@gmail.com');
INSERT INTO student VALUES (10,'nft','entc','BE',74,'male',9698812563,'solapur','nft@gmail.com');
INSERT INTO student VALUES (11,'ytr','CSE','BE',75,'male',9698715563,'solapur','ytr@gmail.com');
INSERT INTO student VALUES (12,'plo','CSE','BE',76,'male',9697712563,'solapur','plo@gmail.com');
INSERT INTO student VALUES (13,'wsd','CSE','BE',77,'male',9698713563,'solapur','wsd@gmail.com');
INSERT INTO student VALUES (14,'pjo','CSE','BE',78,'male',9918712563,'solapur','pjo@gmail.com');
INSERT INTO student VALUES (15,'ytr','CSE','BE',79,'male',9698712583,'solapur','ytr@gmail.com');
INSERT INTO student VALUES (16,'mjh','CSE','BE',80,'male',9698792563,'solapur','mjh@gmail.com');
INSERT INTO student VALUES (17,'kjh','CSE','BE',81,'male',9698797563,'solapur','kjh@gmail.com');
INSERT INTO student VALUES (18,'kjz','CSE','BE',82,'male',9697797563,'solapur','kjz@gmail.com');
INSERT INTO student VALUES (19,'jht','CSE','BE',83,'male',8697797563,'solapur','jht@gmail.com');
INSERT INTO student VALUES (20,'rtf','CSE','BE',84,'male',9698797563,'solapur','rtf@gmail.com');



