create database if not exists test;

create table if not exists employee (
  id int not null auto_increment primary key,
  lastName varchar(5) not null,
  firstName varchar(5) not null,
  lastNameKana varchar(15) not null,
  firstNameKana varchar(15) not null,
  image varchar(100),
  comments varchar(300),
  created_at datetime default current_timestamp,
  updated_at datetime default current_timestamp
) auto_increment = 10001, ENGINE = InnoDB;

create table if not exists affiliation (
  id int not null auto_increment primary key,
  department varchar(10) not null,
  manager varchar(10) null,
  sectionChief varchar(10) null,
  constraint affiliation_id foreign key (id) references employee (id) on update cascade on delete cascade
) ENGINE = InnoDB;

create table if not exists position (
  id int not null auto_increment primary key,
  position varchar(10) not null,
  constraint position_id foreign key (id) references employee (id) on update cascade on delete cascade
) ENGINE = InnoDB;
