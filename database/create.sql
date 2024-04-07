CREATE TABLE Users (
    user_id SERIAL PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password_hash VARCHAR(128) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    role VARCHAR(20) NOT NULL
);

CREATE TABLE Books (
    book_id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    authors VARCHAR(255),
    isbn VARCHAR(20),
    publisher VARCHAR(100),
    publication_year INT,
    genre VARCHAR(50),
    description TEXT,
    cover_image_url TEXT
);

CREATE TABLE UserBooks (
    record_id SERIAL PRIMARY KEY,
    user_id INT REFERENCES Users(user_id),
    book_id INT REFERENCES Books(book_id),
    status VARCHAR(50),
    read_date DATE,
    abandon_date DATE,
    rating INT
);


-- Заполнение таблицы Авторы (Authors)
INSERT INTO Authors (first_name, last_name, biography)
VALUES 
    ('Джоан', 'Роулинг', 'Британская писательница, автор серии книг о Гарри Поттере'),
    ('Лев', 'Толстой', 'Русский писатель, автор "Войны и мира" и "Анны Карениной"'),
    ('Джордж', 'Оруэлл', 'Английский писатель, автор романа "1984"'),
    ('Льюис', 'Кэрролл', 'Английский писатель, автор "Алисы в Стране Чудес"'),
    ('Михаил', 'Булгаков', 'Русский писатель, автор романа "Мастер и Маргарита"');

-- Заполнение таблицы Издательства (Publishers)
INSERT INTO Publishers (name, address, contact_info)
VALUES 
    ('Издательство "Росмэн"', 'Москва, ул. Лесная, д. 3', '+7 (495) 123-45-67'),
    ('Эксмо', 'Москва, ул. Новая, д. 5', '+7 (495) 987-65-43'),
    ('Издательство "Рипол Классик"', 'Санкт-Петербург, ул. Фонтанная, д. 10', '+7 (812) 111-22-33');

-- Заполнение таблицы Жанры (Genres)
INSERT INTO Genres (name)
VALUES 
    ('Фэнтези'),
    ('Роман'),
    ('Научная фантастика'),
    ('Детская литература'),
    ('Сатира');

-- Заполнение таблицы Книги (Books)
INSERT INTO Books (title, author_id, isbn, publisher_id, publication_year, genre_id, description, cover_image_url)
VALUES 
    ('Гарри Поттер и Философский Камень', 1, '978-5-17-112939-4', 1, 1997, 1, 'Первая книга о Гарри Поттере', 'http://example.com/covers/harry_potter1.jpg'),
    ('Война и мир', 2, '978-5-699-20201-6', 2, 1869, 2, 'Роман Льва Толстого', 'http://example.com/covers/war_and_peace.jpg'),
    ('1984', 3, '978-5-699-20201-6', 3, 1949, 3, 'Роман Джорджа Оруэлла', 'http://example.com/covers/1984.jpg'),
    ('Алиса в стране чудес', 4, '978-5-17-131839-3', 3, 1865, 4, 'Роман Льюиса Кэрролла', 'http://example.com/covers/alice_in_wonderland.jpg'),
    ('Мастер и Маргарита', 5, '978-5-17-078479-4', 1, 1967, 5, 'Роман Михаила Булгакова', 'http://example.com/covers/master_and_margarita.jpg');
