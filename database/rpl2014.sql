-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2016 at 05:03 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rpl2014`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `order by` int(2) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `name`, `link`, `order by`) VALUES
(1, 'Home', 'http://rpl2014.com/blog/home.php', 1),
(2, 'About', 'http://rpl2014.com/blog/about.php', 2),
(3, 'Contact', 'http://rpl2014.com/blog/contact.php', 3);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `ID` int(11) NOT NULL,
  `post_name` text NOT NULL,
  `post_title` longtext NOT NULL,
  `post_subtitle` text NOT NULL,
  `post_content` longtext NOT NULL,
  `post_link` text NOT NULL,
  `post_status` varchar(50) NOT NULL,
  `post_author` varchar(50) NOT NULL,
  `post_update` varchar(20) NOT NULL,
  `post_type` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`ID`, `post_name`, `post_title`, `post_subtitle`, `post_content`, `post_link`, `post_status`, `post_author`, `post_update`, `post_type`) VALUES
(1, 'post-pertama', 'Post Pertama', 'Subtitle', '<div class="layoutmanager">\r\n<div class="container-fluid layout-container">\r\n<div class="row layout-row">\r\n<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 layout-column ">\r\n<div class="layout-column-one layout-column-editable">\r\n<p>Foto</p>\r\n</div>\r\n</div>\r\n\r\n<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 layout-column">\r\n<div class="layout-column-two layout-column-editable">\r\n<p>Lorem ipsum Ini adalah uji coba tool baru untuk boot strap.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p style="text-align:center">&nbsp;<strong>Judul saya</strong></p>\r\n\r\n<div class="btgrid">\r\n<div class="row row-1">\r\n<div class="col col-md-4">\r\n<div class="content">\r\n<p>Lorem ipsum Ini adalah uji coba tool baru untuk boot strap.</p>\r\n</div>\r\n</div>\r\n\r\n<div class="col col-md-4">\r\n<div class="content">\r\n<p>Lorem ipsum Ini adalah uji coba tool baru untuk boot strap.</p>\r\n</div>\r\n</div>\r\n\r\n<div class="col col-md-4">\r\n<div class="content">\r\n<p>Lorem ipsum Ini adalah uji coba tool baru untuk boot strap.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="layoutmanager">\r\n<div class="container-fluid layout-container">\r\n<div class="row layout-row">\r\n<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 layout-column ">\r\n<div class="layout-column-one layout-column-editable">\r\n<p>Lorem ipsum Ini adalah uji coba tool baru untuk boot strap.</p>\r\n</div>\r\n</div>\r\n\r\n<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 layout-column">\r\n<div class="layout-column-two layout-column-editable">\r\n<p>Lorem ipsum Ini adalah uji coba tool baru untuk boot strap.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="layoutmanager">\r\n<div class="container-fluid layout-container">\r\n<div class="row layout-row">\r\n<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 layout-column">\r\n<div class="layout-column-one layout-column-editable">\r\n<p style="text-align:center"><strong>Judul saya</strong></p>\r\n\r\n<p style="text-align:center">Lorem ipsum Ini adalah uji coba tool baru untuk boot strap.</p>\r\n</div>\r\n</div>\r\n\r\n<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 layout-column">\r\n<div class="layout-column-two layout-column-editable">\r\n<p style="text-align:center"><strong>Judul saya</strong></p>\r\n\r\n<p style="text-align:center">Lorem ipsum Ini adalah uji coba tool baru untuk boot strap.</p>\r\n</div>\r\n</div>\r\n\r\n<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 layout-column">\r\n<div class="layout-column-three layout-column-editable">\r\n<p style="text-align:center"><strong>Judul saya</strong></p>\r\n\r\n<p style="text-align:center">Lorem ipsum Ini adalah uji coba tool baru untuk boot strap.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n', 'http://localhost/RPL2014/blog/post.php?p=post-pertama', 'publish', 'achmad', '12:04:50 09-09-2016', 'post'),
(2, 'post-kedua', 'Post Kedua', '', 'Ini adalah post kedua', 'http://localhost/RPL2014/blog/post.php?p=post-kedua', 'publish', 'achmad', '2016-09-06', 'post'),
(5, 'about', 'about', '', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe nostrum ullam eveniet pariatur voluptates odit, fuga atque ea nobis sit soluta odio, adipisci quas excepturi maxime quae totam ducimus consectetur?</p>\r\n                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum in officia voluptas voluptatibus, minus!</p>\r\n                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum molestiae debitis nobis, quod sapiente qui voluptatum, placeat magni repudiandae accusantium fugit quas labore non rerum possimus, corrupti enim modi! Et.</p>', 'http://localhost/smkti/index.php/site/post/about', 'publish', 'achmad', '12:04:50 09-09-2016', 'page'),
(6, 'contact', 'contact', '', '                <p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p>\r\n                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->\r\n                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It''s recommended that you use a private domain email address! -->\r\n                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->\r\n                <form name="sentMessage" id="contactForm" novalidate="">\r\n                    <div class="row control-group">\r\n                        <div class="form-group col-xs-12 floating-label-form-group controls">\r\n                            <label>Name</label>\r\n                            <input class="form-control" placeholder="Name" id="name" required="" data-validation-required-message="Please enter your name." type="text">\r\n                            <p class="help-block text-danger"></p>\r\n                        </div>\r\n                    </div>\r\n                    <div class="row control-group">\r\n                        <div class="form-group col-xs-12 floating-label-form-group controls">\r\n                            <label>Email Address</label>\r\n                            <input class="form-control" placeholder="Email Address" id="email" required="" data-validation-required-message="Please enter your email address." type="email">\r\n                            <p class="help-block text-danger"></p>\r\n                        </div>\r\n                    </div>\r\n                    <div class="row control-group">\r\n                        <div class="form-group col-xs-12 floating-label-form-group controls">\r\n                            <label>Phone Number</label>\r\n                            <input class="form-control" placeholder="Phone Number" id="phone" required="" data-validation-required-message="Please enter your phone number." type="tel">\r\n                            <p class="help-block text-danger"></p>\r\n                        </div>\r\n                    </div>\r\n                    <div class="row control-group">\r\n                        <div class="form-group col-xs-12 floating-label-form-group controls">\r\n                            <label>Message</label>\r\n                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required="" data-validation-required-message="Please enter a message." aria-invalid="false"></textarea>\r\n                            <p class="help-block text-danger"></p>\r\n                        </div>\r\n                    </div>\r\n                    <br>\r\n                    <div id="success"></div>\r\n                    <div class="row">\r\n                        <div class="form-group col-xs-12">\r\n                            <button type="submit" class="btn btn-default">Send</button>\r\n                        </div>\r\n                    </div>\r\n                </form>', 'http://localhost/smkti/index.php/site/post/contact', 'publish', 'achmad', '12:04:50 09-09-2016', 'page'),
(7, 'hallo', 'hallo title', 'hallo sub', 'hallo konten', 'http://rpl2014.com/blog/hallo', 'publish', 'admin', '21:34:04 22-11-2016', 'post');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` text
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
