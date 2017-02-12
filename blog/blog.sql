-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 11 2017 г., 11:48
-- Версия сервера: 5.7.14
-- Версия PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `posted` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `posted`) VALUES
(1, 'Заголовок 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, ea cum ipsum eos labore architecto maxime assumenda, nostrum magnam quasi error! Quis distinctio ullam, fugiat cupiditate est eos, ipsum quasi quas obcaecati ratione quam nobis aspernatur, natus laborum aut tempora veniam? Alias excepturi placeat praesentium magni voluptatum nemo porro vero quisquam amet nam ipsa reprehenderit aliquam ea perspiciatis harum non illum labore omnis maxime voluptas magnam, molestiae! Inventore optio quaerat eius temporibus, voluptate a corrupti veniam iure mollitia ea quis ducimus harum nobis consectetur cumque ullam quas commodi quod consequatur. Maxime sequi earum assumenda quisquam eos quo quis ipsa nesciunt, architecto consequatur debitis repudiandae modi unde non quibusdam aperiam quidem quae ducimus dolorem vitae incidunt nisi, id. Itaque illum, quam expedita quasi voluptatibus hic nostrum, distinctio odit aliquam eveniet accusamus tempora. Vero modi ducimus debitis ea quaerat recusandae, incidunt neque atque, earum quam unde?', '2017-02-01'),
(2, 'Заголовок 2', 'Reprehenderit numquam sunt odio consequatur laudantium soluta labore facilis enim, blanditiis possimus, quidem architecto quisquam quos maxime sapiente deserunt totam ad, nesciunt tempora temporibus? Natus minima amet voluptatem velit incidunt a saepe obcaecati aliquam labore ipsam, facilis facere assumenda adipisci sequi eaque vel quos dolores, aspernatur quia magni! Distinctio, eum reiciendis rerum, odio sapiente dolores! At temporibus inventore doloremque, repudiandae placeat, minus omnis delectus corporis, pariatur veritatis necessitatibus officiis! Accusantium laborum architecto veritatis placeat quam mollitia quidem molestias nulla, dolore itaque. Voluptas cupiditate eaque vero vitae, eveniet numquam. Similique eum placeat, dolores, illum tenetur ex assumenda necessitatibus. Debitis mollitia tempore voluptatum eaque pariatur nesciunt hic vero impedit accusamus ut. Soluta consequuntur cum harum ullam at, excepturi. Dolore nobis possimus quod similique repudiandae, ipsa sit voluptatibus ex, quibusdam adipisci quaerat iure. Temporibus nemo tenetur obcaecati. Fuga ducimus cupiditate, quod natus dolores fugit perferendis ut totam sit, minima a pariatur veniam aspernatur voluptas soluta autem?', '2017-02-03'),
(3, 'Заголовок 3', 'Beatae impedit aliquam, commodi dolorum fugiat ex aut modi ea alias quo dolor pariatur, adipisci nemo aspernatur veritatis eos, molestias itaque ducimus rerum possimus tempore blanditiis quod harum! Placeat consequatur accusamus minima aspernatur ducimus ipsa cum, ratione cumque eligendi consequuntur, sint voluptates ullam accusantium deserunt. Eos voluptatem obcaecati rem enim blanditiis deleniti eaque sit vel totam reprehenderit reiciendis aliquid ipsa illum dolore veniam eum, a nisi. Libero nobis ad, quos laboriosam, iste eius assumenda voluptates at beatae voluptatum temporibus esse. Repudiandae nulla consequuntur quam dignissimos blanditiis tenetur eligendi aperiam autem nisi sint, et magni perspiciatis expedita, deleniti in non nemo atque quidem provident minima? Sunt tenetur, ipsa molestias ut ipsam vitae quo, nesciunt laboriosam nulla amet non ab ea ducimus rerum quas? Iusto voluptatum doloremque aperiam! Necessitatibus eos illo voluptates eaque delectus at, laboriosam rem blanditiis consequuntur facilis. Error temporibus esse est laudantium nesciunt ipsam reprehenderit nulla asperiores, doloremque explicabo deserunt neque, aut ratione quod perferendis. Ullam, expedita ut. Autem dolorem non, magnam dicta. Nulla laudantium nostrum ad sequi id cupiditate suscipit, repudiandae pariatur cum, atque aliquid natus sint fugiat neque voluptate dicta velit omnis nam, impedit ipsa vel asperiores facilis doloremque. Voluptatibus optio iusto hic totam, dolorum numquam libero commodi laborum dicta.', '2017-02-06');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
