CREATE TABLE IF NOT EXISTS `events_people` (
  `equid` int(5) NOT NULL,
  `epinfo` varchar(10) NOT NULL,
  `epip` varchar(20) NOT NULL,
  `eptime` text NOT NULL,
  PRIMARY KEY (`equid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
