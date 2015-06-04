-- phpMyAdmin SQL Dump
-- version 4.0.10.9
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成日時: 2015 年 6 月 04 日 07:10
-- サーバのバージョン: 5.1.73
-- PHP のバージョン: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `Osiriai`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `awards`
--

CREATE TABLE IF NOT EXISTS `awards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `award_name` varchar(20) NOT NULL,
  `award_content` varchar(500) NOT NULL,
  `award_icon` varchar(50) NOT NULL COMMENT '画像ファイル',
  `created` datetime NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='アワード集' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `favorites`
--

CREATE TABLE IF NOT EXISTS `favorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `favorite_active_id` int(11) NOT NULL,
  `favorite_passive_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='イイネした人された人を格納' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `sender_user_id` int(11) NOT NULL,
  `recipient_user_id` int(11) NOT NULL,
  `delete_flag` int(11) NOT NULL DEFAULT '0' COMMENT '0表示、１消去',
  `created` datetime NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `picture_flag` varchar(1) NOT NULL DEFAULT '0' COMMENT 'デフォルト０、トップがは１',
  `photo_name` varchar(30) NOT NULL,
  `photo_file_name` varchar(500) NOT NULL,
  `created` datetime NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='投稿されたお尻の画像を格納' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL DEFAULT 'F' COMMENT 'F女M男',
  `picture` varchar(500) NOT NULL,
  `birthday` date NOT NULL,
  `mail` varchar(100) NOT NULL,
  `languages` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `nation` varchar(30) NOT NULL,
  `education` varchar(50) DEFAULT NULL,
  `work` varchar(50) DEFAULT NULL,
  `objective` varchar(1) NOT NULL DEFAULT '0' COMMENT '１お尻自慢、２お尻友達、３お尻恋愛',
  `introduction` text,
  `current_location` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='facebookから得られる情報を格納しておく' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `visits`
--

CREATE TABLE IF NOT EXISTS `visits` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '総閲覧数',
  `user_active_id` int(11) NOT NULL,
  `user_passive_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='総閲覧数の母数、user毎の閲覧された回数wo' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- テーブルの構造 `winners`
--

CREATE TABLE IF NOT EXISTS `winners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `award_Id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `modified_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理者画面でアワードを付与していく予定' AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
