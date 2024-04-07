
CREATE TABLE Books (
    book_id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    author_id INT NOT NULL,
    isbn VARCHAR(20),
    publisher_id INT,
    publication_year INT,
    genre_id INT,
    description TEXT,
    cover_image_url TEXT,
    FOREIGN KEY (author_id) REFERENCES Authors(author_id),
    FOREIGN KEY (publisher_id) REFERENCES Publishers(publisher_id),
    FOREIGN KEY (genre_id) REFERENCES Genres(genre_id)
);

CREATE TABLE Authors (
    author_id SERIAL PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    biography TEXT
);

CREATE TABLE Publishers (
    publisher_id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    address TEXT,
    contact_info TEXT
);

CREATE TABLE Genres (
    genre_id SERIAL PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);
