CREATE TABLE IF NOT EXISTS `events_info` (
  `eiuid` int(5) NOT NULL DEFAULT '0' COMMENT '不重複的識別碼',
  `eititle` varchar(10) DEFAULT NULL COMMENT '活動標題',
  `eicontext` text COMMENT '活動內容',
  `eiother` text COMMENT '其他',
  PRIMARY KEY (`eiuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='活動資訊';
