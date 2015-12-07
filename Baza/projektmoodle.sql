-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Gru 2015, 01:05
-- Wersja serwera: 5.6.24
-- Wersja PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `projektmoodle`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kursy`
--

CREATE TABLE IF NOT EXISTS `kursy` (
  `id_kursu` int(11) NOT NULL,
  `id_zalozyciela` int(11) NOT NULL,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL,
  `klucz_dostepu` text COLLATE utf8_polish_ci NOT NULL,
  `stan` text COLLATE utf8_polish_ci NOT NULL COMMENT 'Przechowuje informację, czy kurs jest zablokowany(blocked) czy nie (dobry)'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kursy`
--

INSERT INTO `kursy` (`id_kursu`, `id_zalozyciela`, `nazwa`, `klucz_dostepu`, `stan`) VALUES
(1, 2, 'nazwakursuxD', 'nazwa', 'dobry'),
(2, 1, 'zobaczsam', 'sam123', 'dobry'),
(3, 2, 'kombinuj', 'kombinuj', 'dobry');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lekcje`
--

CREATE TABLE IF NOT EXISTS `lekcje` (
  `id_lekcji` int(11) NOT NULL,
  `id_kursu` int(11) NOT NULL,
  `temat` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `tresc` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `plik_nauczyciela` text CHARACTER SET utf8 COLLATE utf8_polish_ci COMMENT 'Przechowuje opcjonalną ścieżkę do pliku, który udostępnił nauczyciel',
  `oryginalna_nazwa` text CHARACTER SET utf8 COLLATE utf8_polish_ci,
  `data_dodania` text CHARACTER SET utf8 COLLATE utf8_polish_ci
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `lekcje`
--

INSERT INTO `lekcje` (`id_lekcji`, `id_kursu`, `temat`, `tresc`, `plik_nauczyciela`, `oryginalna_nazwa`, `data_dodania`) VALUES
(1, 1, 'jak to jest', 'normalnie', NULL, NULL, NULL),
(2, 1, 'inne przyklady', 'tutaj znajdujes sie inny przyklad', NULL, NULL, NULL),
(3, 1, 'kombinatoryka', 'kto mial matematyke wie co to jest', NULL, NULL, NULL),
(7, 2, 'mamba', 'kazdy ma mambe, mam i ja!', NULL, NULL, NULL),
(25, 3, 'VAC', 'VAC dla makacia !', NULL, NULL, NULL),
(26, 3, 'oczko', 'czy te oczy moga klamac?', NULL, NULL, NULL),
(28, 3, 'moze piwo ', 'dopiero w piatek !', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE IF NOT EXISTS `uzytkownicy` (
  `id` int(11) NOT NULL,
  `login` text COLLATE utf8_polish_ci NOT NULL,
  `haslo` text COLLATE utf8_polish_ci NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `typ` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `reset_hasla` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`, `imie`, `nazwisko`, `typ`, `email`, `reset_hasla`) VALUES
(1, 'admin', 'admin', 'panMistrz', 'nieNazwisko', 'a', '', ''),
(2, 'nauczyciel', 'nauczyciel', 'PanTen', 'NazwiskoxD', 'n', 'naucz@wp.pl', ''),
(3, 'uzytkownik', 'uzytkownik', 'Adam', 'Sieczkiewicz', 'u', 'uzy@wp.pl', ''),
(7, 'test', 'test', 'testow', 'testowads', 'u', 'test@wp.pl', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zapisy`
--

CREATE TABLE IF NOT EXISTS `zapisy` (
  `id_zapisu` int(11) NOT NULL,
  `id_uzytkownika` int(11) NOT NULL,
  `id_kursu` int(11) NOT NULL,
  `data_zapisu` text NOT NULL,
  `plik_uzytkownika` text CHARACTER SET utf8 COLLATE utf8_polish_ci COMMENT 'Przechowuje opcjonalny plik, który użytkownik przesłał do lekcji'
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zapisy`
--

INSERT INTO `zapisy` (`id_zapisu`, `id_uzytkownika`, `id_kursu`, `data_zapisu`, `plik_uzytkownika`) VALUES
(1, 3, 1, '2015-10-23', NULL),
(10, 4, 2, '2015-10-24', NULL),
(11, 3, 2, '2015-10-24', NULL),
(15, 3, 3, '2015-10-25', NULL),
(16, 4, 3, '2015-10-26', NULL),
(21, 7, 2, '2015-12-07', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `kursy`
--
ALTER TABLE `kursy`
  ADD PRIMARY KEY (`id_kursu`), ADD KEY `id_kursu` (`id_kursu`), ADD KEY `id_zalozyciela` (`id_zalozyciela`);

--
-- Indexes for table `lekcje`
--
ALTER TABLE `lekcje`
  ADD PRIMARY KEY (`id_lekcji`), ADD KEY `id_kursu` (`id_kursu`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `zapisy`
--
ALTER TABLE `zapisy`
  ADD PRIMARY KEY (`id_zapisu`), ADD KEY `id_uzytkownika` (`id_uzytkownika`), ADD KEY `id_kursu` (`id_kursu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `kursy`
--
ALTER TABLE `kursy`
  MODIFY `id_kursu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `lekcje`
--
ALTER TABLE `lekcje`
  MODIFY `id_lekcji` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `zapisy`
--
ALTER TABLE `zapisy`
  MODIFY `id_zapisu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
