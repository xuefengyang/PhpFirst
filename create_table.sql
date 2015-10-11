-- 
	CREATE DATABASE IF NOT EXISTS _test DEFAULT CHARACTER SET 'UTF8'

	use _test;

	
-- 创建一个用户表 
	CREATE TABLE IF NOT EXISTS `user`(
		`id` SMALLINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		`username` VARCHAR(8),
		`password` VARCHAR(16),
		`age` TINYINT,
		`salary` FLOAT(8,2)
		);

-- 插入数据
	INSERT INTO _user(username,password,age,salary)VALUES('yxf','123',23,5999.88);
