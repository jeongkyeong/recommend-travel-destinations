CREATE TABLE `account_info` (
  `memberSeq` int(10) NOT NULL AUTO_INCREMENT,
  `id` varchar(30) NOT NULL COMMENT '회원 아이디',
  `pwd` varchar(20) NOT NULL COMMENT '회원 비밀번호',
  `name` varchar(10) NOT NULL COMMENT '회원 이름',
  `addr` varchar(80) DEFAULT NULL COMMENT '회원 주소',
  `sex` varchar(3) NOT NULL COMMENT '회원 성별',
  `birthDay` int(8) DEFAULT NULL COMMENT '회원 생년월일',
  `email` varchar(20) DEFAULT NULL COMMENT '회원 메일 주소',
  PRIMARY KEY (`memberSeq`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
