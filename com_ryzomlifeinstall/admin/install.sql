DROP TABLE IF EXISTS `#__ryzomlife`;

create table `#__ryzomlife`(
ryz_id int auto_increment primary key,
ryz_uid varchar(40) not null,
ryz_hominkeyfull varchar(255),
ryz_hominkeypart varchar(255),
ryz_typeentity tinyint default 1,
ryz_passphrase varchar(255) not null 
);

insert into `#__ryzomlife` (ryz_id,ryz_uid,ryz_hominkeyfull,ryz_typeentity,ryz_passphrase) values (1,'Apihomin','f0uESp2dnZ0iYABQBgRVVQA2VURHY2dAXQsN',1,'d25b77cc642c1e2eb644b5f85ee4e65b');
insert into `#__ryzomlife` (ryz_id,ryz_uid,ryz_hominkeyfull,ryz_typeentity,ryz_passphrase) values (2,'Apinoob','6D6ESrS0tLQiZgEKAQoHAA4zU243RBE0VAUE',1,'d4480916865f28f24bd91af5bea89cbc');