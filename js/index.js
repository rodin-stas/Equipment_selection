"use strict";

let numberOfFilms;

function start() {
  numberOfFilms = +prompt("Сколько фильмов вы уже посмотрели?", "");

  while (numberOfFilms == "" || numberOfFilms == null || isNaN(numberOfFilms)) {
    numberOfFilms = +prompt("Сколько фильмов вы уже посмотрели?", "");
  }
}

start();

const personalMovieDB = {
  count: numberOfFilms,
  movies: {},
  actors: {},
  genres: [],
  privat: false,
};

function rememberMyFilms() {
  for (let i = 0; i < 2; i++) {
    const lastFilm = prompt("Один из последних просмотренных фильмов?", ""),
      revueFilm = prompt("На сколько оцените его?", "");

    if (
      lastFilm != "" &&
      lastFilm.length <= 50 &&
      revueFilm != "" &&
      lastFilm != null &&
      revueFilm != ""
    ) {
      personalMovieDB.movies[lastFilm] = revueFilm;
      console.log("Выполнено");
    } else {
      console.log("Упсс");
      i--;
    }
  }
}

rememberMyFilms();

function detectPersonalLevel() {
  switch (true) {
    case personalMovieDB.count <= 10:
      console.log("Просмотрено довольно мало фильмов");
      break;
    case personalMovieDB.count > 10 && personalMovieDB.count < 30:
      console.log("Вы классический зритель");
      break;
    case personalMovieDB.count >= 50:
      console.log("Вы киноман");
      break;
    default:
      console.log("Ошибка");
  }
}

detectPersonalLevel();

function showMyDB(st) {
  if (!st) {
    console.log(personalMovieDB);
  }
}

showMyDB(personalMovieDB.privat);

function writeYourGenres() {
  for (let i = 0; i < 3; i++) {
    personalMovieDB.genres[i] = prompt(`Ваш любимый жанр под номером ${i + 1}`);
  }
  console.log(personalMovieDB);
}
writeYourGenres();
