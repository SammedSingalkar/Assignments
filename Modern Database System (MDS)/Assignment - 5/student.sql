use college;

create table student(
s_id int(18) Not Null,
s_name varchar(30) Not Null,
s_addr text Not Null,
s_mobile_no bigint(10) Not Null,
dept_id int(18) Not Null,
c_id int(18) Not Null,
primary key (s_id),
 FOREIGN KEY (dept_id) REFERENCES department(dept_id),
 FOREIGN KEY (c_id) REFERENCES course(c_id)
);

INSERT INTO student VALUES (19031070,'Sammed Singalkar','orange pride khinvasara, aurangabad',8308497059,1,1);

select * from student;