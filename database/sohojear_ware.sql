-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2023 at 08:30 AM
-- Server version: 5.7.41
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sohojear_ware`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `order` tinyint(4) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_title` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(244) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `order`, `parent_id`, `name`, `slug`, `description`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`, `seo_title`, `image`) VALUES
(1, NULL, NULL, 'Web Design & development', 'web-design-and-development', '<div class=\"row intro m-0\">\r\n<div class=\"col-12\">At our company, we offer professional web design services that are tailored to meet the unique needs and preferences of our clients. Our team of expert designers understands the importance of creating a website that is not only visually appealing but also functional and user-friendly. We work closely with our clients to develop a website that effectively represents their brand and helps to achieve their business goals.</div>\r\n</div>\r\n<p>Our web design services include a range of features such as custom website design, responsive design, content creation, and search engine optimization. Our team of designers has extensive experience in creating custom designs that are unique to each client\'s needs. We ensure that all designs are responsive and optimized for all devices, ensuring a seamless user experience across all platforms.</p>\r\n<p>We also offer content creation services, which include copywriting, graphic design, and video production. Our team of content creators works closely with our clients to develop engaging and informative content that aligns with their brand and messaging. We understand the importance of high-quality content in attracting and retaining customers, and we are committed to delivering content that stands out in a crowded digital landscape.</p>\r\n<p>Additionally, we offer search engine optimization (SEO) services to help our clients improve their website\'s visibility and attract more organic traffic. Our team of SEO experts uses proven strategies to optimize website content and structure, ensuring that our clients\' websites rank high in search engine results pages (SERPs).</p>\r\n<p>Overall, our web design services are designed to help our clients build a strong online presence and achieve their business goals. We pride ourselves on delivering high-quality designs, engaging content, and effective SEO strategies that deliver measurable results.</p>\r\n<p>&nbsp;</p>', 'Looking for professional web design services? Our team of expert web designers can help you create a stunning and functional website that meets your business needs. We specialize in custom web design, responsive design, and user experience design. Contact us today to learn more about our web design services and how we can help take your online presence to the next level.', 'web design, custom website design, responsive web design, website redesign, UI/UX design, website development, website maintenance, website optimization, landing page design, website customization', '2023-04-28 21:34:00', '2023-05-15 00:22:53', 'Stunning Web Design Services for Businesses | Get a Free Quote', NULL),
(2, NULL, NULL, 'Graphic Design', 'graphic-design', '<p>Graphic design is an essential aspect of branding and marketing. It involves creating visual content that communicates a message effectively and creatively. At our company, we offer a comprehensive range of graphic design services to help businesses establish and maintain their brand identity.</p>\r\n<p>One of our core services is brand design. We work closely with clients to understand their brand values and create a visual identity that reflects those values. This includes creating a logo, color palette, typography, and other design elements that can be used consistently across all marketing materials.</p>\r\n<p>In addition to brand design, we also offer banner design services for online advertising campaigns. Our team of designers can create eye-catching banners that capture the attention of potential customers and drive traffic to your website.</p>\r\n<p>Social media is another essential aspect of modern marketing, and we offer social media post design services for popular platforms such as Facebook and Instagram. Our designers can create engaging and shareable social media posts that help build your brand and engage your audience.</p>\r\n<p>Overall, our graphics design services are designed to help businesses create a cohesive and compelling visual identity across all marketing channels. Whether you need a new logo or complete brand overhaul, we can work with you to achieve your goals and help your business stand out in today\'s crowded market.</p>', 'Our graphics design services include branding, logo design, banner design, and social media post design for Facebook and Instagram. Let our team help you establish a cohesive and compelling visual identity for your business.', 'graphic design, branding, brand design, logo design, color palette, typography, banner design, social media post design, Facebook, Instagram, marketing materials.', '2023-05-14 23:39:05', '2023-05-15 00:22:28', 'Stunning Graphics Design for Your Business | Branding, Banners, and More', NULL),
(3, NULL, NULL, 'SEO', 'seo', '<p>Our SEO services are designed to help businesses improve their online visibility, drive more traffic to their websites, and ultimately increase their revenue. Our team of experts has years of experience in the field and we use only the latest and most effective strategies to deliver results.</p>\r\n<p>We start by conducting a thorough analysis of your website and identifying areas that need improvement. This includes everything from keyword research to site structure and content optimization. We then develop a customized SEO strategy that is tailored to your business and industry.</p>\r\n<p>Our services include on-page optimization, which involves optimizing your website\'s content, metadata, and other elements to make it more search engine-friendly. We also provide off-page optimization, which involves building quality backlinks to your site from other reputable websites. This helps to increase your website\'s authority and credibility in the eyes of search engines.</p>\r\n<p>In addition to these services, we also provide ongoing monitoring and reporting to ensure that our strategies are delivering the desired results. We keep track of your website\'s search engine rankings, traffic, and other key metrics, and make adjustments to our strategies as needed.</p>\r\n<p>Overall, our goal is to help your business achieve long-term success online by improving your search engine rankings, driving more traffic to your site, and ultimately increasing your revenue.</p>', 'We offers professional SEO services to help boost your website\'s ranking on search engines. Our team of experts uses proven strategies to increase your online visibility and attract more organic traffic.', 'SEO services, website ranking, online visibility, organic traffic, search engine optimization', '2023-05-15 00:12:20', '2023-05-15 00:22:09', 'Professional SEO Services | Boost Your Website\'s Ranking and Traffic', NULL),
(4, NULL, NULL, 'Digital Marketing', 'digital-marketing', '<p>Digital marketing is the promotion of products or services using digital channels such as search engines, social media, email, and websites. At our company, we offer a wide range of digital marketing services to help businesses establish and expand their online presence.</p>\r\n<p>Our digital marketing services include search engine optimization (SEO), social media marketing, pay-per-click (PPC) advertising, content marketing, email marketing, and more. Our team of experts will work closely with you to develop a customized digital marketing strategy that meets your business objectives and goals.</p>\r\n<p>We specialize in SEO services that aim to increase the quantity and quality of traffic to your website. Our SEO services include keyword research, on-page optimization, off-page optimization, content optimization, and local SEO. Our team uses the latest SEO techniques to ensure that your website ranks higher in search engine results pages (SERPs) and receives more traffic.</p>\r\n<p>We also provide social media marketing services that help businesses engage with their target audience, increase brand awareness, and drive traffic to their website. Our social media marketing services include creating and managing social media accounts, creating social media content, and running social media advertising campaigns.</p>\r\n<p>In addition, we offer pay-per-click (PPC) advertising services that help businesses reach their target audience and drive traffic to their website. Our PPC advertising services include creating and managing PPC campaigns, optimizing landing pages, and tracking and analyzing campaign performance.</p>\r\n<p>Our content marketing services aim to increase brand awareness and establish your business as a thought leader in your industry. We provide content creation, content optimization, and content distribution services.</p>\r\n<p>We also provide email marketing services that help businesses engage with their customers and increase brand loyalty. Our email marketing services include creating and sending email campaigns, designing email templates, and tracking and analyzing campaign performance.</p>\r\n<p>At our company, we are committed to delivering high-quality digital marketing services that help businesses achieve their online objectives. Contact us today to learn more about how we can help your business grow online.</p>', 'Our digital marketing services include SEO, social media marketing, PPC advertising, content marketing, and email marketing. We work closely with you to develop a customized digital marketing strategy that meets your business objectives and goals.', 'digital marketing, SEO, social media marketing, PPC advertising, content marketing, email marketing', '2023-05-15 00:16:49', '2023-05-15 00:21:49', 'Expert Digital Marketers | Proven Strategies for Business Growth', NULL),
(5, NULL, NULL, 'Apps Development', 'apps-development', '<p>Android and iOS app development is a crucial aspect of any business that wants to have a mobile presence. We provide end-to-end app development services for both Android and iOS platforms. Our team of experienced developers work with the latest technology to create apps that are user-friendly, scalable, and secure.</p>\r\n<p>We specialize in developing custom apps that are tailored to your specific needs. Whether it\'s a business app, entertainment app, social media app, or any other kind of app, we can help you bring your ideas to life. We follow a streamlined development process that includes ideation, design, development, testing, and launch.</p>\r\n<p>Our developers are proficient in Java, Kotlin, Swift, Objective-C, and other programming languages. We also have experience working with various SDKs, APIs, and third-party tools. This enables us to create apps that integrate with a wide range of systems and platforms.</p>\r\n<p>We believe in delivering high-quality apps that meet your business objectives. Our team works closely with you to understand your requirements and provide you with the best possible solution. We also provide post-launch support and maintenance to ensure that your app is always up-to-date and functioning smoothly.</p>', 'We provide end-to-end Android and iOS app development services that are user-friendly, scalable, and secure. Our team of experienced developers work with the latest technology to create custom apps tailored to your specific needs. Contact us for high-quality app development services.', 'Android app development, iOS app development, custom app development, mobile app development, app developers, app design', '2023-05-15 01:30:15', '2023-05-15 01:30:31', 'Expert Mobile App Developers for Your Next Big Idea', NULL),
(6, NULL, NULL, 'Innovative Ideas', 'innovative-ideas', '<p>Our business idea service is designed to help entrepreneurs and business owners generate new and innovative ideas for their ventures. We understand that coming up with a unique and profitable business idea can be a daunting task, especially for those who are just starting out in the business world.</p>\r\n<p>Our team of experienced professionals is dedicated to providing you with the support and guidance you need to identify and develop the perfect business idea for your goals and vision. We offer a comprehensive range of services, including brainstorming sessions, market research, feasibility studies, and more, to ensure that you have all the resources and insights necessary to make informed decisions.</p>\r\n<p>Whether you are looking to launch a new product, enter a new market, or simply expand your existing business, our business idea service can provide you with the expertise and knowledge you need to succeed. We work closely with you to understand your unique challenges and opportunities, and we tailor our services to meet your specific needs and goals.</p>\r\n<p>With our help, you can rest assured that you are making the most of your time, resources, and investments, and that you are on the right track to achieving your business objectives. So if you are ready to take your business to the next level, get in touch with us today to learn more about our business idea service.</p>', 'Get expert support and guidance to identify and develop unique and profitable business ideas with our comprehensive business idea service. Contact us today to learn more.', 'Get expert support and guidance to identify and develop unique and profitable business ideas with our comprehensive business idea service. Contact us today to learn more.', '2023-05-15 01:43:21', '2023-05-15 02:00:34', 'Business Idea Service | Generate Innovative Ideas for Your Venture', NULL),
(7, NULL, NULL, 'Web and App Maintenance', 'web-and-app-maintenance', '<p>We understand the importance of keeping your website and mobile apps running smoothly and efficiently. That\'s why we offer comprehensive web and app maintenance services to ensure the optimal performance and longevity of your digital assets.</p>\r\n<p>Our team of experienced professionals is well-versed in the latest technologies and industry best practices. We provide regular updates and upgrades to keep your website and apps up-to-date with the latest features and functionalities. From installing security patches to resolving compatibility issues, we handle all aspects of maintenance to ensure your digital presence remains secure and optimized.</p>\r\n<p>Our web and app maintenance services include bug fixes, performance optimization, content updates, database management, and user interface enhancements. We also conduct thorough testing and quality assurance to identify and address any issues before they impact your users.</p>\r\n<p>With our proactive approach, we monitor your website and apps to identify potential issues and address them promptly. We strive to minimize downtime and ensure uninterrupted access for your users. Our dedicated support team is available to assist you with any queries or concerns, providing reliable and efficient solutions to keep your digital assets running smoothly.</p>\r\n<p>By outsourcing your web and app maintenance to us, you can focus on your core business activities while entrusting the technical aspects to our experts. We offer flexible maintenance plans tailored to your specific needs and budget, ensuring cost-effectiveness without compromising on quality.</p>\r\n<p>Investing in regular maintenance not only improves the performance and security of your website and apps but also enhances the user experience, ultimately driving better business outcomes. Trust us for reliable and efficient web and app maintenance solutions. Contact us today to discuss your maintenance requirements and let us take care of your digital assets with our expertise and dedication.</p>', 'Keep your website and mobile apps up-to-date, secure, and optimized with our professional maintenance services. We provide updates, bug fixes, security patches, and ongoing support for a seamless user experience. Trust our experts for reliable web and app maintenance solutions. Contact us today.', 'web maintenance, app maintenance, website support, app updates, website troubleshooting', '2023-05-15 06:11:30', '2023-05-15 06:42:42', 'Expert Web and App Maintenance Services | Keep Your Digital Presence Running Smoothly', NULL),
(8, NULL, NULL, 'WordPress', 'wordpress', '<p>At SohojWare, we specialize in WordPress web creation and offer comprehensive services to bring your vision to life on the WordPress platform. Our experienced team of developers and designers is skilled in utilizing the full potential of WordPress to deliver customized, functional, and visually appealing websites.</p>\r\n<p>Whether you need a simple blog, a corporate website, an e-commerce store, or a complex web application, we have the expertise to meet your requirements. We understand that each business is unique, and we take the time to understand your goals, target audience, and desired features to create a tailored WordPress website that reflects your brand identity.</p>\r\n<p>Our WordPress web creation process involves careful planning, responsive design, intuitive navigation, and seamless integration of features such as contact forms, galleries, sliders, social media integration, and more. We ensure that your website is optimized for performance, speed, and search engine visibility, providing a solid foundation for your online presence.</p>\r\n<p>In addition to web creation, we also offer WordPress bug fixing services to address any issues or glitches that may arise on your existing WordPress website. Our team has a deep understanding of the WordPress framework and its components, allowing us to identify and resolve bugs efficiently. We conduct thorough testing to ensure that your website is bug-free and functions smoothly across different devices and browsers.</p>\r\n<p>By choosing SohojWare for your WordPress web creation and bug fixing needs, you can benefit from our expertise, attention to detail, and commitment to customer satisfaction. We strive to deliver websites that not only look impressive but also provide a seamless user experience and help you achieve your business objectives.</p>\r\n<p>Contact us today to discuss your WordPress web creation or bug fixing requirements, and let our team of professionals turn your vision into a stunning reality.</p>', 'Professional WordPress web creation and bug fixing services tailored to your needs. Get a secure, responsive, and visually appealing website. Reliable maintenance for optimal performance. Contact us now for reliable WordPress solutions.', 'WordPress web creation, bug fixing, WordPress website development, WordPress maintenance, WordPress troubleshooting', '2023-05-15 06:28:47', '2023-05-15 06:41:51', 'WordPress Web Creation and Bug Fixing Services', NULL),
(9, NULL, NULL, 'Video Editing', 'video-editing', '<p>Transform your raw footage into captivating visual stories with our professional video editing services. At SohojWare, we understand the power of effective storytelling through videos and the impact it can have on your audience. Our team of experienced video editors is dedicated to bringing your vision to life, ensuring that every frame is polished to perfection.</p>\r\n<p>From corporate videos and promotional clips to event highlights and social media content, we have the expertise to enhance the quality and impact of your videos. Using advanced editing techniques, we seamlessly blend scenes, apply transitions, adjust color grading, and incorporate captivating visual effects to create a truly immersive viewing experience.</p>\r\n<p>Our video editing process is tailored to your unique requirements. We work closely with you to understand your objectives, style preferences, and desired message, ensuring that the final product aligns with your vision. Whether you need a simple trim and polish or a comprehensive editing overhaul, we have the skills and tools to deliver exceptional results.</p>\r\n<p>With our attention to detail and meticulous approach, we ensure that your videos are not only visually stunning but also convey your intended message effectively. We strive for excellence in every project, providing fast turnaround times without compromising on quality.</p>\r\n<p>Partner with us for your video editing needs and unlock the full potential of your footage. Stand out from the crowd, engage your audience, and leave a lasting impression with professionally edited videos. Contact us today to discuss your video editing requirements and let us bring your vision to life.</p>', 'Enhance your videos with our professional editing services. Our expert team will bring your vision to life with seamless transitions, captivating effects, and precise color grading. Contact us today for stunning, impactful videos.', 'video editing, professional video editing, video post-production, video editing services, video production, video enhancement, visual storytelling, seamless transitions, captivating effects, color grading', '2023-05-15 06:54:46', '2023-05-15 06:54:46', 'Expert Video Editing Services for Captivating Visual Content | SohojWare', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `logo`, `created_at`, `updated_at`, `link`) VALUES
(3, 'clients/May2023/ZoZHsDFDwlCWeKYV6Msn.jpg', '2023-05-16 02:12:13', '2023-05-16 02:12:13', 'https://ahromart.com/'),
(4, 'clients/May2023/oPqHnOHItNnOcJfjuulQ.jpg', '2023-05-16 02:13:28', '2023-05-16 02:13:28', 'https://alvitanutrition.com/'),
(5, 'clients/May2023/bwTmqegn4gyi5ULWFhRj.jpg', '2023-05-16 02:15:58', '2023-05-16 02:15:58', NULL),
(6, 'clients/May2023/VVO7EpxFcBROSoe6lQMs.jpg', '2023-05-16 02:17:30', '2023-05-16 02:17:30', 'https://viralsnare.com/'),
(7, 'clients/May2023/4ozkuxcdq6B4gUxJU9hx.jpg', '2023-05-16 02:18:13', '2023-05-16 02:18:13', 'https://fraukruner.de/'),
(8, 'clients/May2023/Gnu0v4GHGfGm59phNK7O.jpg', '2023-05-16 02:18:51', '2023-05-16 02:18:51', 'https://riyadi.com/'),
(9, 'clients/May2023/xV3bEVRxa3QVcnxaMxHt.jpg', '2023-05-16 02:19:49', '2023-05-16 02:19:49', 'https://bdjobwar.com/'),
(10, 'clients/May2023/EiBQ0d6pgPwrdWYdXv1G.jpg', '2023-05-16 02:20:48', '2023-05-16 02:20:48', 'https://iziibuy.com/'),
(11, 'clients/May2023/WCHxVyQor6jegLmKVjdx.jpg', '2023-05-16 02:21:02', '2023-05-16 02:21:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `package` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `package`, `created_at`, `updated_at`) VALUES
(10, 'bivolami', 'dyfymyce@mailinator.com', '+1 (653) 667-6799', 'Cupiditate elit quo', 'Est harum sit labo', NULL, '2023-05-10 07:06:46', '2023-05-10 07:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 0, 0, 0, 0, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 3),
(24, 4, 'order', 'text', 'Order', 0, 0, 0, 0, 0, 0, '{\"default\":1}', 4),
(25, 4, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 5),
(26, 4, 'slug', 'text', 'Slug', 0, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 6),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 7),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(65, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(66, 8, 'logo', 'image', 'Logo', 0, 1, 1, 1, 1, 1, '{}', 2),
(67, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(68, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(69, 8, 'link', 'text', 'Link', 0, 1, 1, 1, 1, 1, '{}', 3),
(70, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(71, 9, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(72, 9, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 3),
(73, 9, 'phone', 'text', 'Phone', 0, 1, 1, 1, 1, 1, '{}', 4),
(74, 9, 'subject', 'text', 'Subject', 0, 1, 1, 1, 1, 1, '{}', 5),
(75, 9, 'message', 'text', 'Message', 0, 1, 1, 1, 1, 1, '{}', 6),
(76, 9, 'package', 'text', 'Package', 0, 1, 1, 1, 1, 1, '{}', 7),
(77, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 1, '{}', 8),
(78, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(79, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(80, 10, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":6}}', 2),
(81, 10, 'body', 'rich_text_box', 'Body', 0, 0, 1, 1, 1, 1, '{}', 4),
(82, 10, 'language', 'text', 'Language', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":6}}', 5),
(83, 10, 'website', 'text', 'Website', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":6}}', 6),
(84, 10, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":6},\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"}]}', 9),
(85, 10, 'payment_methods', 'text', 'Payment Methods', 0, 0, 1, 1, 1, 1, '{\"display\":{\"width\":6}}', 7),
(86, 10, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 1, '{}', 10),
(87, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 11),
(88, 10, 'status', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"0\",\"options\":{\"0\":\"Deactive\",\"1\":\"Active\"},\"display\":{\"width\":6}}', 8),
(89, 10, 'slug', 'text', 'Slug', 0, 1, 1, 1, 1, 1, '{\"display\":{\"width\":6},\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:portfolios,slug\"}}', 3),
(90, 4, 'description', 'rich_text_box', 'Description', 0, 0, 1, 1, 1, 1, '{}', 8),
(91, 4, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 10),
(92, 4, 'meta_keywords', 'text', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 11),
(93, 4, 'seo_title', 'text', 'Seo Title', 0, 1, 1, 1, 1, 1, '{}', 12),
(94, 4, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2023-04-28 21:26:51', '2023-05-17 23:10:36'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(8, 'clients', 'clients', 'Client', 'Clients', 'voyager-images', 'App\\Client', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-04-29 11:39:19', '2023-04-29 11:40:11'),
(9, 'contacts', 'contacts', 'Contact', 'Contacts', 'voyager-chat', 'App\\Models\\Contact', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2023-05-02 00:47:25', '2023-05-02 00:47:25'),
(10, 'portfolios', 'portfolios', 'Portfolio', 'Portfolios', NULL, 'App\\Models\\Portfolio', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2023-05-07 19:18:00', '2023-05-07 19:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-04-28 21:26:50', '2023-04-28 21:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2023-04-28 21:26:50', '2023-04-28 21:26:50', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 2, '2023-04-28 21:26:50', '2023-05-07 19:37:35', 'voyager.media.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 10, '2023-04-28 21:26:50', '2023-05-07 19:37:45', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 4, '2023-04-28 21:26:51', '2023-05-07 19:37:35', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 3, '2023-04-28 21:26:51', '2023-05-07 19:37:35', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 5, '2023-04-28 21:26:51', '2023-05-07 19:37:35', 'voyager.pages.index', NULL),
(15, 1, 'Clients', '', '_self', 'voyager-images', NULL, NULL, 8, '2023-04-29 11:39:19', '2023-05-07 19:37:47', 'voyager.clients.index', NULL),
(16, 1, 'Contacts', '', '_self', 'voyager-chat', NULL, NULL, 9, '2023-05-02 00:47:26', '2023-05-07 19:37:47', 'voyager.contacts.index', NULL),
(17, 1, 'Portfolios', '', '_self', 'voyager-trophy', '#000000', NULL, 6, '2023-05-07 19:18:01', '2023-05-07 19:38:30', 'voyager.portfolios.index', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2016_01_01_000000_create_pages_table', 2),
(26, '2016_01_01_000000_create_posts_table', 2),
(27, '2016_02_15_204651_create_categories_table', 2),
(28, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(2, 'browse_bread', NULL, '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(3, 'browse_database', NULL, '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(4, 'browse_media', NULL, '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(5, 'browse_compass', NULL, '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(6, 'browse_menus', 'menus', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(7, 'read_menus', 'menus', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(8, 'edit_menus', 'menus', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(9, 'add_menus', 'menus', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(10, 'delete_menus', 'menus', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(11, 'browse_roles', 'roles', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(12, 'read_roles', 'roles', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(13, 'edit_roles', 'roles', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(14, 'add_roles', 'roles', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(15, 'delete_roles', 'roles', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(16, 'browse_users', 'users', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(17, 'read_users', 'users', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(18, 'edit_users', 'users', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(19, 'add_users', 'users', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(20, 'delete_users', 'users', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(21, 'browse_settings', 'settings', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(22, 'read_settings', 'settings', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(23, 'edit_settings', 'settings', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(24, 'add_settings', 'settings', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(25, 'delete_settings', 'settings', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(26, 'browse_categories', 'categories', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(27, 'read_categories', 'categories', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(28, 'edit_categories', 'categories', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(29, 'add_categories', 'categories', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(30, 'delete_categories', 'categories', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(31, 'browse_posts', 'posts', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(32, 'read_posts', 'posts', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(33, 'edit_posts', 'posts', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(34, 'add_posts', 'posts', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(35, 'delete_posts', 'posts', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(36, 'browse_pages', 'pages', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(37, 'read_pages', 'pages', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(38, 'edit_pages', 'pages', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(39, 'add_pages', 'pages', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(40, 'delete_pages', 'pages', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(41, 'browse_services', 'services', '2023-04-28 21:31:00', '2023-04-28 21:31:00'),
(42, 'read_services', 'services', '2023-04-28 21:31:00', '2023-04-28 21:31:00'),
(43, 'edit_services', 'services', '2023-04-28 21:31:00', '2023-04-28 21:31:00'),
(44, 'add_services', 'services', '2023-04-28 21:31:00', '2023-04-28 21:31:00'),
(45, 'delete_services', 'services', '2023-04-28 21:31:00', '2023-04-28 21:31:00'),
(46, 'browse_clients', 'clients', '2023-04-29 11:39:19', '2023-04-29 11:39:19'),
(47, 'read_clients', 'clients', '2023-04-29 11:39:19', '2023-04-29 11:39:19'),
(48, 'edit_clients', 'clients', '2023-04-29 11:39:19', '2023-04-29 11:39:19'),
(49, 'add_clients', 'clients', '2023-04-29 11:39:19', '2023-04-29 11:39:19'),
(50, 'delete_clients', 'clients', '2023-04-29 11:39:19', '2023-04-29 11:39:19'),
(51, 'browse_contacts', 'contacts', '2023-05-02 00:47:25', '2023-05-02 00:47:25'),
(52, 'read_contacts', 'contacts', '2023-05-02 00:47:25', '2023-05-02 00:47:25'),
(53, 'edit_contacts', 'contacts', '2023-05-02 00:47:25', '2023-05-02 00:47:25'),
(54, 'add_contacts', 'contacts', '2023-05-02 00:47:25', '2023-05-02 00:47:25'),
(55, 'delete_contacts', 'contacts', '2023-05-02 00:47:25', '2023-05-02 00:47:25'),
(56, 'browse_portfolios', 'portfolios', '2023-05-07 19:18:01', '2023-05-07 19:18:01'),
(57, 'read_portfolios', 'portfolios', '2023-05-07 19:18:01', '2023-05-07 19:18:01'),
(58, 'edit_portfolios', 'portfolios', '2023-05-07 19:18:01', '2023-05-07 19:18:01'),
(59, 'add_portfolios', 'portfolios', '2023-05-07 19:18:01', '2023-05-07 19:18:01'),
(60, 'delete_portfolios', 'portfolios', '2023-05-07 19:18:01', '2023-05-07 19:18:01');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_methods` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `slug`, `meta_description`, `meta_keywords`, `body`, `image`, `language`, `website`, `payment_methods`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sohojearning', 'sohojearning', NULL, NULL, NULL, 'portfolios/May2023/WnVZGqpjdG6A7EMFk1Da.png', NULL, 'sohojearning.com', NULL, 0, '2023-05-18 03:01:44', '2023-05-18 03:45:43'),
(2, 'iziibuy', 'iziibuy', NULL, NULL, NULL, 'portfolios/May2023/wQ69jxF0s1sRHGJiJKjB.png', NULL, 'iziibuy.com', NULL, 0, '2023-05-18 03:03:24', '2023-05-18 03:59:57'),
(3, 'viralsnare', 'viralsnare', NULL, NULL, NULL, 'portfolios/May2023/FDHbALZ6jo9L1lXEXnOe.png', NULL, 'viralsnare.com', NULL, 0, '2023-05-18 03:05:37', '2023-05-18 03:54:18'),
(4, 'alvitanutrition', 'alvitanutrition', NULL, NULL, NULL, 'portfolios/May2023/mvz37sjBYwGXxTM1dGFP.png', NULL, 'alvitanutrition.com', NULL, 0, '2023-05-18 03:06:33', '2023-05-18 04:00:13'),
(5, 'bdjobwar', 'bdjobwar', NULL, NULL, NULL, 'portfolios/May2023/KzLBpLk8qeuF91nmJ4Ft.png', NULL, 'bdjobwar.com', NULL, 0, '2023-05-18 03:06:49', '2023-05-18 04:00:39'),
(6, 'localsearch180', 'localsearch180', NULL, NULL, NULL, 'portfolios/May2023/xPIg1u360E4JGo4mR6Bh.png', NULL, 'localsearch180.com', NULL, 0, '2023-05-18 03:07:49', '2023-05-18 03:56:42'),
(7, 'skillsarts', 'skillsarts', NULL, NULL, NULL, 'portfolios/May2023/LOzhXztMpfnAtqSRl4EM.png', NULL, 'skillsarts.com', NULL, 0, '2023-05-18 03:08:32', '2023-05-18 03:08:32'),
(8, 'animalvideossubmission', 'animalvideossubmission', NULL, NULL, NULL, 'portfolios/May2023/8IUYemu3ExxdZLEEqmsm.png', NULL, 'animalvideossubmission.com', NULL, 0, '2023-05-18 03:09:13', '2023-05-18 03:53:36'),
(9, 'mixsens', 'mixsens', NULL, NULL, NULL, 'portfolios/May2023/Ilp1KmD3fITP6GtdUk49.png', NULL, 'mixsens.com', NULL, 0, '2023-05-18 03:10:15', '2023-05-18 03:53:13'),
(10, 'klokkeregisteret', 'klokkeregisteret', NULL, NULL, NULL, 'portfolios/May2023/S8wmSQY59mqWFZFCMsvx.png', NULL, 'klokkeregisteret.no', NULL, 0, '2023-05-18 03:10:49', '2023-05-18 03:52:41'),
(11, 'yuniqode', 'yuniqode', NULL, NULL, NULL, 'portfolios/May2023/sZ6V9vWFl0HxbTrhsB1T.png', NULL, 'yuniqode.com', NULL, 0, '2023-05-18 03:11:31', '2023-05-18 03:52:20'),
(12, 'firmaanbud', 'firmaanbud', NULL, NULL, NULL, 'portfolios/May2023/r81eB2UKySbjEUI42WGZ.png', NULL, 'firmaanbud.no', NULL, 0, '2023-05-18 03:12:03', '2023-05-18 03:51:54'),
(13, 'bloomofficial', 'bloomofficial', NULL, NULL, NULL, 'portfolios/May2023/k1culrveV2BHa9XpQyP5.png', NULL, 'bloomofficial.com', NULL, 0, '2023-05-18 03:13:51', '2023-05-18 03:51:12'),
(14, 'mototubesubmission', 'mototubesubmission', NULL, NULL, NULL, 'portfolios/May2023/06AUeRyUNq8VEOzHtaY6.png', NULL, 'mototubesubmission.com', NULL, 0, '2023-05-18 03:14:36', '2023-05-18 03:50:52'),
(15, 'amincodes', 'amincodes', NULL, NULL, NULL, 'portfolios/May2023/AUzoHemokppr6veKH8gr.png', NULL, 'amincodes.com', NULL, 0, '2023-05-18 03:15:26', '2023-05-18 03:50:30'),
(16, 'fraukruner', 'fraukruner', NULL, NULL, NULL, 'portfolios/May2023/lMno76mikZWCxAu6i1AF.png', NULL, 'fraukruner.de', NULL, 0, '2023-05-18 03:16:22', '2023-05-18 03:50:10'),
(17, 'ahromart', 'ahromart', NULL, NULL, NULL, 'portfolios/May2023/QBQFWnnD9poP2eqPL6D8.png', NULL, 'ahromart.com', NULL, 0, '2023-05-18 03:20:03', '2023-05-18 03:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(5, 2, 1, 'Why Responsive Web Design is Essential for Your Business', 'Why Responsive Web Design is Essential for Your Business', NULL, '<p>As technology continues to evolve at a rapid pace, businesses must keep up in order to stay relevant in their respective industries. One of the most important ways to do this is through responsive web design. In today\'s digital age, having a website that is optimized for different devices is essential for any business that wants to attract and retain customers.</p>\r\n<p>Responsive web design refers to a design approach that allows websites to adjust their layout and content to fit different screen sizes and devices. This means that regardless of whether a user is accessing a website from a desktop computer, a tablet, or a smartphone, the website will be optimized to fit their screen size and provide an optimal user experience.</p>\r\n<p>Here are some reasons why responsive web design is essential for your business:</p>\r\n<ol>\r\n<li style=\"font-weight: bold;\"><strong>Improved User Experience</strong></li>\r\n</ol>\r\n<p>Responsive web design is all about providing a great user experience across all devices. When a website is optimized for different screen sizes, it is easier for users to navigate and interact with the site. This means that users are more likely to stay on the site longer, engage with the content, and ultimately convert into customers.</p>\r\n<ol start=\"2\">\r\n<li style=\"font-weight: bold;\"><strong>Higher Search Engine Rankings</strong></li>\r\n</ol>\r\n<p>Search engines like Google prioritize websites that provide a good user experience. Since responsive web design is all about creating a user-friendly site, search engines will give preference to responsive sites when ranking them in search results. This means that having a responsive website can help improve your search engine rankings and drive more traffic to your site.</p>\r\n<ol start=\"3\">\r\n<li style=\"font-weight: bold;\"><strong>Increased Mobile Traffic</strong></li>\r\n</ol>\r\n<p>More and more people are accessing the internet on their mobile devices, which means that having a website that is optimized for mobile is essential. In fact, mobile traffic has now surpassed desktop traffic, making it more important than ever to have a mobile-friendly website. By using responsive web design, you can ensure that your site is optimized for mobile devices and can attract more mobile traffic.</p>\r\n<ol start=\"4\">\r\n<li style=\"font-weight: bold;\"><strong>Cost-Effective</strong></li>\r\n</ol>\r\n<p>Before responsive web design, businesses had to create separate websites for desktop and mobile devices. This meant double the cost and double the work. With responsive web design, businesses can create one website that is optimized for all devices, saving time and money in the long run.</p>\r\n<ol start=\"5\">\r\n<li style=\"font-weight: bold;\"><strong>Better Conversion Rates</strong></li>\r\n</ol>\r\n<p>Ultimately, the goal of any business website is to convert visitors into customers. By providing a great user experience across all devices, responsive web design can help improve conversion rates. When users are able to easily navigate and interact with a site, they are more likely to convert into customers.</p>\r\n<p>In conclusion, responsive web design is essential for any business that wants to stay relevant in today\'s digital age. By providing a great user experience across all devices, businesses can attract more traffic, improve their search engine rankings, and ultimately convert more visitors into customers. So, if you haven\'t already, it\'s time to invest in responsive web design for your business.</p>', 'posts/May2023/uTYdU0jRDbSPnVuHBOBu.png', 'why-responsive-web-design-is-essential-for-your-business', 'In this article, we explore the benefits of having a mobile app for your business. We discuss how a mobile app can improve customer engagement, increase brand loyalty, and boost sales. Learn more about the advantages of mobile apps and why they are crucial for any modern business.', 'web development, website design, web design trends, responsive design, user experience, user interface, mobile-first design, accessibility, web development tools, front-end development.', 'PUBLISHED', 1, '2023-05-10 08:27:50', '2023-05-16 04:14:35'),
(6, 2, 1, '10 Web Design Trends to Watch Out for in 2023', 'Top 10 Web Design Trends to Follow in 2023 | Stay Ahead of the Game', NULL, '<p>Web design trends are constantly evolving and changing with time, and 2023 is expected to bring some exciting and innovative changes in the world of web design. With advancements in technology and changing user behavior, web designers and developers are constantly looking for new and innovative ways to enhance user experience and create visually appealing websites. In this article, we will discuss 10 web design trends that are expected to be popular in 2023.</p>\r\n<p><strong>Dark Mode</strong> <br>Dark mode has become increasingly popular in recent years and is expected to continue to be a trend in 2023. Dark mode not only reduces eye strain but also gives a modern and sleek look to websites. Many popular apps and websites have already adopted the dark mode feature, and it\'s expected that more websites will follow suit in 2023.</p>\r\n<p><strong>Minimalism<br></strong>Minimalism is not a new trend, but it has been gaining popularity in recent years and is expected to continue to be a trend in 2023. Minimalism is all about simplicity, and it\'s a great way to reduce clutter on a website and create a clean and modern look. Minimalist designs are also more user-friendly and easier to navigate.</p>\r\n<p><strong>3D Graphics</strong> <br>Advancements in technology have made it easier for web designers to incorporate 3D graphics into their designs. 3D graphics add depth and dimension to a website and make it more engaging and interactive. With the increasing popularity of VR and AR, it\'s expected that 3D graphics will become more prevalent in web design in 2023.</p>\r\n<p><strong>Bold Typography</strong>&nbsp;<br>Bold typography has been a popular trend in recent years and is expected to continue to be a trend in 2023. Bold typography not only adds personality to a website but also makes it easier for users to read and scan through the content.</p>\r\n<p><strong>Illustrations&nbsp;<br></strong>Illustrations have become increasingly popular in web design in recent years and are expected to continue to be a trend in 2023. Illustrations add a playful and whimsical touch to a website and can be used to convey complex ideas in a simple and easy-to-understand way.</p>\r\n<p><strong>Responsive Design<br></strong> Responsive design is not a new trend, but it\'s expected to continue to be a trend in 2023. With the increasing use of mobile devices, it\'s essential that websites are designed to be responsive and adapt to different screen sizes. Responsive design not only enhances user experience but also improves SEO.</p>\r\n<p><strong>Custom Animations</strong> <br>Custom animations are a great way to add personality and character to a website. Animations can be used to create interactive experiences and engage users. With advancements in technology, it\'s becoming easier for web designers to create custom animations, and it\'s expected that more websites will incorporate animations in their designs in 2023.</p>\r\n<p><strong>Voice User Interface</strong>&nbsp;<br>Voice user interface (VUI) technology has been gaining popularity in recent years and is expected to become more prevalent in web design in 2023. VUI allows users to interact with a website using voice commands, making it easier and more convenient to use. With the increasing use of smart speakers and virtual assistants, VUI is expected to become an essential feature in web design.</p>\r\n<p><strong>Augmented Reality</strong> <br>Augmented reality (AR) is another technology that\'s expected to become more prevalent in web design in 2023. AR allows users to interact with a website in a more immersive and engaging way. With the increasing popularity of AR in gaming and entertainment, it\'s expected that more websites will incorporate AR into their designs in 2023.</p>\r\n<p><strong>Personalization</strong> <br>Personalization has become increasingly important in recent years, and it\'s expected to continue to be a trend in 2023. Personalization allows websites to tailor their content and user experience to individual users, making it more engaging and relevant.</p>\r\n<p>&nbsp;</p>\r\n<p>In conclusion, web design trends are constantly evolving and changing with new technologies and user demands. As we look forward to 2023, it\'s important to keep an eye on the latest web design trends to stay ahead of the curve and ensure that your website stands out in the crowded digital landscape. Whether it\'s embracing bold colors, experimenting with new typography, or optimizing for voice search, there are many ways to create a modern and engaging website that meets the needs of your audience. By staying up to date on the latest web design trends and incorporating them into your website, you can create a truly exceptional user experience that drives engagement and conversions.</p>', 'posts/May2023/xV3NyWAlljrHGwJQXckL.png', '10-web-design-trends-to-watch-out-for-in-2023', 'Stay ahead of the game with the latest web design trends of 2023. Read our article and discover the top 10 web design trends to keep your website fresh and modern. From minimalism to 3D graphics, we\'ve got you covered.', 'web design, design trends, 2023, website design, user experience, visual design, responsive design, accessibility, mobile optimization, minimalism', 'PUBLISHED', 1, '2023-05-10 08:49:16', '2023-05-16 04:14:11');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2023-04-28 21:26:50', '2023-04-28 21:26:50'),
(2, 'user', 'Normal User', '2023-04-28 21:26:50', '2023-04-28 21:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Sohojware - Leading Web Development Company', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Boost your online presence with our expert web design, development, and mobile app development services. Enhance your visibility with our SEO services and drive traffic to your site with our digital marketing solutions. Our team also offers top-notch graphics design to create a stunning visual experience for your brand.', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Sohojware', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Leading Web Development Company', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin'),
(11, 'site.keywords', 'Keywords', 'web design, web development, mobile apps development, SEO services, digital marketing, graphics design, website optimization, user experience, responsive design, software development', NULL, 'text', 6, 'Site');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2023-04-28 21:26:51', '2023-04-28 21:26:51'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2023-04-28 21:26:51', '2023-04-28 21:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Sayed', 'reovilsayed@gmail.com', 'users/default.png', NULL, '$2y$10$6v6g96jdDZPssAHK3V1w2uiQRO119LqlD6c2QhRsYXxEJPHWrN/xq', 'DdP9Y2w1hAPwtAxhhwJbrqrZtPbO5btOS2hlHy5MWubNVz0TxdUd2PLlU0VO', '{\"locale\":\"en\"}', '2023-04-28 21:26:51', '2023-05-14 22:56:17'),
(2, 1, 'dania', 'daniabinte24@email.com', 'users/default.png', NULL, '$2y$10$1edI2oUYvTtzXR2Q0R4SXOXG2U.ecX8UWJJmujnO9/9LAA7hF6LDe', NULL, '{\"locale\":\"en\"}', '2023-05-15 07:00:53', '2023-05-15 07:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
