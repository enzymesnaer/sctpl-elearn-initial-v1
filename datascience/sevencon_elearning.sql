-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 27, 2020 at 02:35 AM
-- Server version: 5.7.29
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sevencon_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_packages`
--

CREATE TABLE `all_packages` (
  `id` varchar(10) NOT NULL,
  `description` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_packages`
--

INSERT INTO `all_packages` (`id`, `description`, `price`, `discount`) VALUES
('0002', 'Data Science', 23790, 23);

-- --------------------------------------------------------

--
-- Table structure for table `all_payment_transactions`
--

CREATE TABLE `all_payment_transactions` (
  `txnid` varchar(50) NOT NULL,
  `orderid` varchar(10) NOT NULL,
  `txn_amount` float NOT NULL,
  `payment_mode` varchar(10) NOT NULL,
  `currency` varchar(5) NOT NULL,
  `txn_date` datetime NOT NULL,
  `status_code` varchar(20) NOT NULL,
  `response_code` varchar(5) NOT NULL,
  `response_msg` varchar(100) NOT NULL,
  `gateway_name` varchar(200) NOT NULL,
  `bank_txnid` varchar(50) NOT NULL,
  `bank_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `courseid` int(100) NOT NULL,
  `code` varchar(10) NOT NULL,
  `coursename` varchar(1000) NOT NULL,
  `price` float DEFAULT NULL,
  `coursedescr` varchar(10000) NOT NULL,
  `courseimg` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`courseid`, `code`, `coursename`, `price`, `coursedescr`, `courseimg`) VALUES
(1001, 'MLB', 'Machine Learning Beginner', 3400, 'About Machine Learning Beginner Course', '/image/path/'),
(1002, 'MLI', 'Machine Learning Intermediate', 3100, 'About Machine Learning Intermediate Course', '/image/path/'),
(2001, 'MLB', 'Machine Learning Beginner', NULL, 'About Machine Learning Beginner Course (Part of Track)', '/image/path/'),
(2002, 'MLI', 'Machine Learning Intermediate', NULL, 'About Machine Learning Intermediate Course (Part of track)', '/image/path/');

-- --------------------------------------------------------

--
-- Table structure for table `discount_coupons`
--

CREATE TABLE `discount_coupons` (
  `code` varchar(10) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `percent` int(11) NOT NULL DEFAULT '0',
  `valid_from` date NOT NULL,
  `valid_to` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discount_coupons`
--

INSERT INTO `discount_coupons` (`code`, `description`, `percent`, `valid_from`, `valid_to`) VALUES
('efrte3434s', 'First  timer Bonus ', 23, '2019-01-01', '2020-12-31'),
('we34t56sas', 'bumper voucher', 37, '2019-01-01', '2020-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_table`
--

CREATE TABLE `enquiry_table` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry_table`
--

INSERT INTO `enquiry_table` (`id`, `name`, `email`, `contact`) VALUES
(8, 'Snehar Koli', 'snehar16395@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `package_courses`
--

CREATE TABLE `package_courses` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `courseid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_courses`
--

INSERT INTO `package_courses` (`id`, `name`, `courseid`) VALUES
('0002', 'Data Science', 2001),
('0002', 'Data Science', 2002);

-- --------------------------------------------------------

--
-- Table structure for table `questions_table`
--

CREATE TABLE `questions_table` (
  `questionid` int(20) NOT NULL,
  `questiondefn` varchar(2000) NOT NULL,
  `option1` varchar(2000) NOT NULL,
  `option2` varchar(2000) NOT NULL,
  `option3` varchar(2000) NOT NULL,
  `answer` int(20) NOT NULL,
  `topicid` int(20) NOT NULL,
  `courseid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions_table`
--

INSERT INTO `questions_table` (`questionid`, `questiondefn`, `option1`, `option2`, `option3`, `answer`, `topicid`, `courseid`) VALUES
(28, 'When the target variable is a continuous value, such as \"price_of_a_house\" or \"weight_of_men\" or \"mark_that_a_student_could_score\"\r\nthen you are solving a _________ problem.', 'Classification', 'Regression ', 'Clustering', 2, 1, 2001),
(29, 'Arrange the below steps in proper sequence<br> \r\ni.   Data Preparation<br>\r\nii.  Data Collection <br>\r\niii. Tuning<br>\r\niv.  Training <br>\r\nv.   Evaluation ', 'ii-i-iv-v-iii ', 'i-ii-iv-v-iii ', 'ii-i-iii-iv-v', 1, 1, 2001),
(30, 'Their are three types of Scaling techniques or Algo\'s : namely ', 'Standard Scalar, Min-Max Scalar and Robust Scalar.', 'Feature Scalar, Min-Max Scalar and Robust Scalar.', 'Feature Scalar, Standard Scalar and Min-Max Scalar', 1, 2, 2001),
(31, 'Identify the correct line of code to load LogisticRegression class.', 'import sklearn.linear_model.LogisticRegression ', 'from sklearn import linear_model.LogisticRegression', 'from sklearn.linear_model import LogisticRegression', 3, 2, 2001),
(32, 'np.c_ is the numpy _______.', 'concatenate function', 'classifier function ', 'processing function', 1, 3, 2001),
(33, 'What does \'c\' parameter indicate in the below LOC :<br>\r\nplt.scatter(iris.data[:,x_index],iris.data[:,y_index],c=iris.target)  ', 'c parameter indicates number of classes ', 'c parameter indicates no. of samples', 'c parameter indicates color', 3, 3, 2001),
(34, 'Split the data such that we get the same set of 80% samples for training and 20% for testing. <br>\r\nfrom sklearn.model_selection<br>\r\nimport train_test_split<br>\r\nxTrain, xTest, yTrain, yTest = ___________ \r\n', 'train_test_split(x, y, random_state=0)', 'train_test_split(x, y, test_size=0.2, random_state=0)', 'train_test_split(x, y, test_size = 0.2)', 2, 4, 2001),
(35, 'In case of Regression ML models we use performance metrics like MAE(Mean Absolute Error), MSE(Mean Squared Error) or RMSE(Root Mean Squared Error) or MAPE(Mean Absolute Percentage Error) or MPE(Mean Percentage Error). All of them are __________. \r\n', 'Negative Rewarding Metric i.e lower the metric value better the model.', 'Positive Rewarding Metric i.e higher the metric value better the model.', 'simply performance metrics.', 1, 4, 2001),
(36, 'What does fit_transform() method of LabelEncoder does ? #refer code snippet<br>\r\ngle = LabelEncoder() <br>\r\ngenre_labels = gle.fit_transform(vg_df[\'Genre\'])<br> \r\ni. During \"fit\", gle understands HOW many unique labels are their in  \'Genre\' column<br>\r\nii. During \"transform\", gle does the mapping of each Genre to a number. Starting from 0.<br> \r\niii. Their is no such method called fit_transform for LabelEncoder class.<br>', 'i and ii correctly explain', 'iii is correct', 'Non of the options help in explaining the Question', 1, 5, 2001),
(37, 'Why should we encode categorical data ?', 'Machine learning algorithm don\'t understand non-numeric data', 'It improves the efficiency of the ML model during prediction phase', 'It improves the accuracy of the ML model during prediction phase', 1, 5, 2001),
(38, 'Which all statements are true w.r.t \"Feature Scaling\"<br>\r\ni.  for LinearRegression, LogisticRegression you must do Feature Scaling.<br>\r\nii. for KNN, SVM and for dimensionality Reduction algorithm like PCA we must do Feature Scaling.<br>\r\niii. for Deep learning we use Neural Networks like CNN, RNN or LSTM, again all data fed to Neural Networks should be scaled before training and testing.', 'None are true.', 'All the statements are true.', 'Only iii is true.', 2, 6, 2001),
(39, 'In case your data has outliers then which scaling technique is the best :', 'StandardScalar', 'Min-Max Scalar', 'Robust Scalar', 3, 6, 2001),
(40, 'Which statement hold true :<br>\r\ni. for evaluating regression-based ML Algo\'s we can use accuracy_score or RMSE (Root Mean Squared Error).\r\n<br>\r\nii. for evaluating classification-based ML algo\'s we can use  \r\nconfusion_matrix, MAPE and accuracy_score.\r\n<br>\r\niii. for evaluating regression-based ML Algo\'s we can use Mean Squared Error(MSE) or RMSE (Root Mean Squared Error). ', 'i and ii are true.', 'ii and iii are true. ', 'only iii is true.', 3, 7, 2001),
(41, 'How will this line of code help ?<br>\r\nstockdata.isnull().sum()', 'for checking whether any column or feature has missing values', 'for checking whether any column or feature has non-missing values', 'checking whether any samples or rows have missing values', 1, 7, 2001),
(42, 'Bootstrap Aggregation or Bagging (an ensemble method) is a technique that combines the predictions from multiple machine learning algorithms together to make more accurate predictions than any individual model\". Is this statement true or false. ', 'True', 'False', 'Bagging is not an ensemble method. Random-forest & XGBoost are the only ensemble methods. ', 1, 8, 2001),
(43, 'Which statement would you use to import a ensemble type of Classifier and Regressor in your code ?<br>\r\n<br>\r\ni. from sklearn.ensemble import RandomForestRegressor\r\n   from sklearn.ensemble import RandomForestClassifier  <br>\r\n   \r\nii. from sklearn.tree import DecisionTreeClassifier\r\n    from sklearn.tree import DecisionTreeRegressor\r\n<br>\r\niii. from sklearn import svm', 'i and ii both can be used for coding an ensemble method.', 'only iii can be used for coding an ensemble method.', 'only i can be used for coding an ensemble method.', 3, 8, 2001),
(44, 'How would you use Naive Bayes Algorithm on a normally distributed dataset ? Which statement would help you in coding ? <br>\r\ni. from sklearn.naive_bayes import GaussianNB <br>\r\nii. from sklearn.naive_bayes import MultinomialNB <br>\r\niii. from sklearn.naive_bayes import BernoulliNB', 'all of the above statements can be used.', '(i) is the most appropriate statement.', '(ii & iii) are the best possible options for normally distributed data.', 2, 9, 2001),
(45, 'A limitation of Naive Bayes is \"the assumption of independent predictors\". In real life, it is almost impossible that we get a set of predictors which are completely independent. Is this statement true ?', 'Yes, it is true.', 'No, it is not.', 'Well, its subjective and depends on the type of data we are dealing with. ', 1, 9, 2001),
(46, 'PCA, is a statistical technique to convert high dimensional data to low dimensional data by selecting the most important features that capture maximum information about the dataset. The features are selected on the basis of _______ that they cause in the output. The feature that causes highest ________ is the first principal component. \r\nFill in the blanks. ', 'standard deviation, variance', 'variance, variance ', 'mean squared error, mean squared error', 2, 10, 2001),
(47, 'It is not always possible to analyze data in high dimensions. For instance if there are 100 features in a dataset. Total number of scatter plots required to visualize the data would be ___________.', '4950', '9900', '100', 1, 10, 2001),
(48, 'K-means clustering is one of the simplest and popular _________ machine learning algorithms.', 'unsupervised', 'supervised', 'ensemble method', 1, 11, 2001),
(49, 'K-means algorithm identifies k number of centroids, and then allocates every data point to the nearest cluster, while keeping the centroids as small as possible. This explanation is _____.', 'Correct', 'partly correct, as \'K\' means no. of features not centroids.', 'partly correct, as \'K\' means no. of clusters not centroids.', 1, 11, 2001),
(50, 'Check Option 1 if done.', 'Check me.', '', '', 1, 12, 2001),
(51, 'Check Option 1 if done.', 'Check me.', '', '', 1, 12, 2001),
(52, 'Check Option 1 if done.', '', '', 'Check me.', 3, 13, 2001),
(53, 'Check Option 1 if done.', '', '', 'Check me.', 3, 13, 2001);

-- --------------------------------------------------------

--
-- Table structure for table `quizusers_table`
--

CREATE TABLE `quizusers_table` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `topicid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `date_submit` varchar(100) NOT NULL,
  `performance` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `id` int(11) NOT NULL,
  `duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`id`, `duration`) VALUES
(1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `topics_table`
--

CREATE TABLE `topics_table` (
  `topicid` int(20) NOT NULL,
  `courseid` int(20) NOT NULL,
  `coursename` varchar(6000) NOT NULL,
  `topicname` varchar(3000) NOT NULL,
  `topicdescr` varchar(3000) NOT NULL,
  `notebookurl` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics_table`
--

INSERT INTO `topics_table` (`topicid`, `courseid`, `coursename`, `topicname`, `topicdescr`, `notebookurl`) VALUES
(1, 1001, 'Machine Learning Beginner', 'Supervised & Unsupervised ML', '', 'https://colab.research.google.com/drive/1lXf-vXSldsM-FW-vh2DGl4hOIiGf0s4_'),
(2, 1001, 'Machine Learning Beginner', 'ML Pipeline', '', 'https://colab.research.google.com/drive/1OuHfxds3XASI7rof_rTNeh9v7gx8UD-j'),
(3, 1001, 'Machine Learning Beginner', 'Basic Data Exploration', '', 'https://colab.research.google.com/drive/1BJGXVT8d391gwhyVXxtuONuvpzGkItGr'),
(4, 1001, 'Machine Learning Beginner', 'Train Test Split', '', 'https://colab.research.google.com/drive/15zsGllmaSWqmleNYUHAmE57ayTpDQzBB'),
(5, 1001, 'Machine Learning Beginner', 'Encoding Categorical Data', '', 'https://colab.research.google.com/drive/1EauAwS3vqe70hkOSRN0e-t_JW2bpBZSP'),
(6, 1001, 'Machine Learning Beginner', 'Feature Scaling', '', 'https://colab.research.google.com/drive/1KDN_kH8tRulxkaVPswcDfQHzIB_81zum'),
(7, 1001, 'Machine Learning Beginner', 'Decision (CART) Trees', '', 'https://colab.research.google.com/drive/1gWwzhgBQjWWu2Cb42afUBkxljJ7zMb3T'),
(8, 1001, 'Machine Learning Beginner', 'Random Forest', '', 'https://colab.research.google.com/drive/1QWEWAmEgdjJk9AZ6i88RV4ESTEaBV5h6'),
(9, 1001, 'Machine Learning Beginner', 'Naive Bayes Classification', '', 'https://colab.research.google.com/drive/1ZN9K9y6nHq2mVRaCWm4jjOmTWlmnYI09'),
(10, 1001, 'Machine Learning Beginner', 'Principal Component Analysis', '', 'https://colab.research.google.com/drive/1cDv1ziyIfMc0YNeOHoEUw7pKNOw3Bokt'),
(11, 1001, 'Machine Learning Beginner', 'k-Means Clustering', '', 'https://colab.research.google.com/drive/1RwzGiEPPMLUE5k4sUJ0BEPIYQR2ono5X'),
(12, 1001, 'Machine Learning Beginner', 'K Nearest Neighbors (KNN) Supervised Classification Algo', '', 'https://colab.research.google.com/drive/1KTVg6lrxJv3ytYkX0QJP74R2xl0juLdL'),
(13, 1001, 'Machine Learning Beginner', 'Deploying ML models on FLASK', '', 'https://colab.research.google.com/drive/1AFV-1PASgDOSCcnjT-Z9a9wJp37cXsS4'),
(1, 2001, 'Machine Learning Beginner', 'Supervised & Unsupervised ML', '', 'https://colab.research.google.com/drive/1lXf-vXSldsM-FW-vh2DGl4hOIiGf0s4_'),
(2, 2001, 'Machine Learning Beginner', 'ML Pipeline', '', 'https://colab.research.google.com/drive/1OuHfxds3XASI7rof_rTNeh9v7gx8UD-j'),
(3, 2001, 'Machine Learning Beginner', 'Basic Data Exploration', '', 'https://colab.research.google.com/drive/1BJGXVT8d391gwhyVXxtuONuvpzGkItGr'),
(4, 2001, 'Machine Learning Beginner', 'Train Test Split', '', 'https://colab.research.google.com/drive/15zsGllmaSWqmleNYUHAmE57ayTpDQzBB'),
(5, 2001, 'Machine Learning Beginner', 'Encoding Categorical Data', '', 'https://colab.research.google.com/drive/1EauAwS3vqe70hkOSRN0e-t_JW2bpBZSP'),
(6, 2001, 'Machine Learning Beginner', 'Feature Scaling', '', 'https://colab.research.google.com/drive/1KDN_kH8tRulxkaVPswcDfQHzIB_81zum'),
(7, 2001, 'Machine Learning Beginner', 'Decision (CART) Trees', '', 'https://colab.research.google.com/drive/1gWwzhgBQjWWu2Cb42afUBkxljJ7zMb3T'),
(8, 2001, 'Machine Learning Beginner', 'Random Forest', '', 'https://colab.research.google.com/drive/1QWEWAmEgdjJk9AZ6i88RV4ESTEaBV5h6'),
(9, 2001, 'Machine Learning Beginner', 'Naive Bayes Classification', '', 'https://colab.research.google.com/drive/1ZN9K9y6nHq2mVRaCWm4jjOmTWlmnYI09'),
(10, 2001, 'Machine Learning Beginner', 'Principal Component Analysis', '', 'https://colab.research.google.com/drive/1cDv1ziyIfMc0YNeOHoEUw7pKNOw3Bokt'),
(11, 2001, 'Machine Learning Beginner', 'k-Means Clustering', '', 'https://colab.research.google.com/drive/1RwzGiEPPMLUE5k4sUJ0BEPIYQR2ono5X'),
(12, 2001, 'Machine Learning Beginner', 'K Nearest Neighbors (KNN) Supervised Classification', '', 'https://colab.research.google.com/drive/1KTVg6lrxJv3ytYkX0QJP74R2xl0juLdL'),
(13, 2001, 'Machine Learning Beginner', 'Deploying ML models on FLASK', '', 'https://colab.research.google.com/drive/1AFV-1PASgDOSCcnjT-Z9a9wJp37cXsS4\r\n  \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `contact` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`uid`, `name`, `username`, `contact`, `email`, `password`) VALUES
(14, 'Snehar Koli', 'snehar16395@sctpl', 2147483647, 'snehar16395@gmail.com', 'admin12345'),
(16, 'Rocky Jagtiani', 'rockyjagtiani@sctpl', 2147483647, 'rockyjagtiani@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `user_course_orders`
--

CREATE TABLE `user_course_orders` (
  `userid` int(100) NOT NULL,
  `courseid` int(100) NOT NULL,
  `orderid` varchar(10) NOT NULL,
  `pct_discount` int(11) DEFAULT '0',
  `status` varchar(10) NOT NULL DEFAULT 'PENDING'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_packages`
--
ALTER TABLE `all_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_table`
--
ALTER TABLE `course_table`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `discount_coupons`
--
ALTER TABLE `discount_coupons`
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `enquiry_table`
--
ALTER TABLE `enquiry_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_courses`
--
ALTER TABLE `package_courses`
  ADD UNIQUE KEY `id` (`id`,`courseid`);

--
-- Indexes for table `questions_table`
--
ALTER TABLE `questions_table`
  ADD PRIMARY KEY (`questionid`);

--
-- Indexes for table `quizusers_table`
--
ALTER TABLE `quizusers_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics_table`
--
ALTER TABLE `topics_table`
  ADD KEY `courseid` (`courseid`),
  ADD KEY `coursename` (`coursename`(768)),
  ADD KEY `topicid` (`topicid`) USING BTREE;

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_table`
--
ALTER TABLE `course_table`
  MODIFY `courseid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2003;

--
-- AUTO_INCREMENT for table `enquiry_table`
--
ALTER TABLE `enquiry_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `questions_table`
--
ALTER TABLE `questions_table`
  MODIFY `questionid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `quizusers_table`
--
ALTER TABLE `quizusers_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `topics_table`
--
ALTER TABLE `topics_table`
  MODIFY `topicid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
