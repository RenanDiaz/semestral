SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `tbl_department` (
  `department_id` int(4) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(80) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

INSERT INTO `tbl_department` (`department_id`, `department_name`) VALUES
(1, 'Finance'),
(2, 'HQ'),
(3, 'Operations'),
(4, 'Marketing'),
(5, 'Sales');

CREATE TABLE IF NOT EXISTS `tbl_designation` (
  `designation_id` int(4) NOT NULL AUTO_INCREMENT,
  `designation_name` varchar(50) NOT NULL,
  PRIMARY KEY (`designation_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

INSERT INTO `tbl_designation` (`designation_id`, `designation_name`) VALUES
(1, 'VP'),
(2, 'Manager'),
(3, 'Executive'),
(4, 'Trainee'),
(5, 'Senior Executive');

CREATE TABLE IF NOT EXISTS `tbl_employee` (
  `employee_id` int(4) NOT NULL AUTO_INCREMENT,
  `employee_no` int(6) NOT NULL,
  `employee_name` varchar(60) NOT NULL,
  `department_id` int(4) NOT NULL,
  `designation_id` int(4) NOT NULL,
  `hired_date` date NOT NULL,
  `salary` int(10) NOT NULL,
  PRIMARY KEY (`employee_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;