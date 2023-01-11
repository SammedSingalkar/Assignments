use clg;

create table student (
s_id int(10) Not Null,
s_Addr text,
s_mobile bigint(10),
Dept_id int(5),
c_id int(5),
primary key(s_id));

insert into student values (1,"Solapur",1023456987,2,2);

select * from student;
