UPDATE `employees` SET `empName` = 'yael', `empDate` = '2016-02-15' WHERE `employees`.`empID` = 1;
INSERT INTO `employees` (`empID`, `empName`, `empDate`) VALUES ('3', 'shasha', '2015-08-08');
SELECT * FROM `employees`;
SELECT * FROM `employees` WHERE `empID`=1;
DELETE FROM `employees` WHERE `employees`.`empID` = 3;