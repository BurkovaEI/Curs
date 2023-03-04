-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Фев 19 2023 г., 08:14
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dance`
--

-- --------------------------------------------------------

--
-- Структура таблицы `direction`
--

CREATE TABLE `direction` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `direction`
--

INSERT INTO `direction` (`id`, `name`, `description`) VALUES
(1, 'Контемпорари', 'Современный сценический танец, включающий в себя самые различные направления и техники. Стиль сформировался на основе танца модерн. Термин «contemporary dance» появился в Европе в 1970-е годы.\nЕго основу составляет техника импровизации, движения, заимствованные из джаз-танца, йоги, восточных единоборств и прочих танцевальных техник.\nВ России танцевальное направление возникло в 1980-е годы.'),
(2, 'Hip-hop dance', 'Относится к уличным танцевальным стилям, в основном сопровождаемый хип-хоп-музыкой. Он включает в себя широкий диапазон стилей, которые были созданы в 1970 году и стали популярными в США. Хип-хоп отличает от других танцевальных стилей «фристайл». Команды устраивают соревнования по фристайлу, называемых «батлами», они являются идентификаторами этого стиля.'),
(3, 'Современный эстрадный танец', 'Танцевальное направление, синтезировавшее в себе самые различные стили. Это не просто последовательность заученных движений, это небольшая танцевальная постановка. И исполнитель должен обладать не только танцевальным, но и актерским талантом.\r\nОдин из принципов, свойственных современному эстрадному танцу, является импровизация. Исполнитель должен суметь выразить себя, свое состояние путем танца.'),
(4, 'Джаз-танец', 'Направление в хореографии, имеющее одно название с музыкальным стилем, но сформированное отдельно от него. Джаз-танец представляет собою оригинальное соединение самобытных афро-американских традиций, балета, современных хореографических течений и этнического танца. Техника сочетает в себе замысловатые позы, ассиметричные ломаные движения, сложные эффектные переводы рук. В данном направлении соединены воедино и воплощены средствами хореографии и движения души и эмоциональные ощущения.'),
(5, 'Локинг', 'Фанковый стиль танца, ассоциируемый также с хип-хопом. Название «локинг» танец получил потому, что включает позиции, называемые «замками». Его основы были заложены Доном Кэмпбеллом в ночных клубах Лос-Анджелеса в начале 1970-х годов. Локинг основывается на базовых движениях, и практически только на них. В оценке мастерства танцора в первую очередь важно исполнение базовых элементов и их качество. Взрывной позитив и энергия просто витают вокруг приверженцев танцевального стиля локинг.'),
(6, 'Vogue', 'Стиль танцев, основывающихся на движениях, которые имитируют позы и мимику моделей из журнала Vogue. Исполняется он под музыку в стиле House. С помощью этого танца артист передает свое мироощущение, свою индивидуальность. В танце даже присутствует некоторый эпатаж. Вог имеет собственную структуру и иерархию. Танцоры этого стиля объединяются вокруг определенного дома. Известнейшими домами в мире вога являются House of Ninja, House of Xtravaganza.'),
(7, 'Русский народный танец', 'Являясь ярким и красочным творением, русский народный танец отражает эмоциональное, художественное и характерное представление о его многовековой истории. Он воплощает в себе всю творческую фантазию народа, глубину его мысли и чувства. Этот вид искусства несет в себе конкретную идею, которая очень точно отражается в постановках. В них присутствуют: драматургическая завязка, сюжет, замысловатые художественные образы, рождающиеся благодаря многообразию пластических движений и задуманных рисунков.'),
(8, 'Брейк-данс', 'Зрелищный танец, сочетающий в себе удивительную пластику и сложность акробатических трюков. Основные его свойства — импровизация, оригинальность и зажигательность.\r\nБрейк-данс представляет танцевальное направление хип-хоп культуры и включает в себя множество стилей. Для его исполнения необходимы хорошая координация, физическая выносливость, чувство ритма и гибкость. В настоящее время брейк-данс распространен по всему миру, существуют многочисленные школы брейк-данса, проводятся чемпионаты и фестивали.'),
(9, 'Направление Эмиля', 'Танцы под градусом)');

-- --------------------------------------------------------

--
-- Структура таблицы `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `person` varchar(500) NOT NULL,
  `id_direction` int(11) NOT NULL,
  `city` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `price` int(11) NOT NULL,
  `photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `event`
--

INSERT INTO `event` (`id`, `name`, `person`, `id_direction`, `city`, `date`, `price`, `photo`) VALUES
(1, 'Закрытая группа Кати Решетниковой (25+)', 'Катя Решетникова', 3, 'Москва', '2023-02-08', 2000, 'event1.jpg'),
(2, 'Reforma Champ', 'Иван Иванов', 5, 'Москва', '2023-01-19', 1500, 'event2.jpg'),
(3, 'VI Международный конкурс-фестиваль детского, юношеского и взрослого творчества \"ТАЛАНТЫ РОССИИ\"', 'Вася Васьков', 2, 'Москва', '2023-03-16', 4500, 'event3.jpg'),
(4, 'Classes frame up IRA PODSHIVAL', 'Ира Подшивалова', 7, 'Казань', '2023-03-12', 3000, 'event4.jpg'),
(5, 'WORKSHOP by OPEN dance classes', 'Иван Маслов | Белов Роман | Айгуля Бузаева', 1, 'Казань', '2023-02-26', 5000, 'event5.jpg'),
(6, 'Мастер-класс по Contemporary', 'Айгуля Бузаева', 1, 'Казань', '2023-02-27', 1000, 'event6.jpg'),
(7, 'DANCE ALL FUCKING NIGHT', 'Эмиль Ногманов', 6, 'Казань', '2023-03-03', 1000, '1676786212_IMG_20211230_034352_556.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `request`
--

INSERT INTO `request` (`id`, `id_user`, `id_event`) VALUES
(1, 2, 4),
(2, 2, 3),
(3, 2, 6),
(4, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `avatar` varchar(1000) DEFAULT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `password`, `avatar`, `role`) VALUES
(1, 'Катерина', 'Буркова', 'kate.burk@gmail.com', '$2a$12$dqOX7M9Uc5Rea24t57PHB.pdo1mMNCQKRZ3yMDi8zOGxizLXRZS2q', '', 'Администратор'),
(2, 'Сабина', 'Вахитова', 'sabina.aue@gmail.com', '$2a$12$dqOX7M9Uc5Rea24t57PHB.pdo1mMNCQKRZ3yMDi8zOGxizLXRZS2q', '1676780341_eIJ6YIB4Gr8.jpg', 'Клиент');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `direction`
--
ALTER TABLE `direction`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_direction` (`id_direction`);

--
-- Индексы таблицы `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_event` (`id_event`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `direction`
--
ALTER TABLE `direction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`id_direction`) REFERENCES `direction` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
