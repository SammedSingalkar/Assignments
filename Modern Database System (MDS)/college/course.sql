use college;

create table course(
c_id int(18) Not Null,
course_level varchar(30) Not Null,
primary key (c_id)
);

INSERT INTO course VALUES (1,'UG');
INSERT INTO course VALUES (2,'PG');
INSERT INTO course VALUES (3,'PHD');

select * from course;