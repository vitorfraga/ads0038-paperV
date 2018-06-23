
CREATE TABLE users (
                id INTEGER NOT NULL,
                name VARCHAR(255),
                password VARCHAR(255),
                email VARCHAR(255),
                created_at TIMESTAMP,
                updated_at TIMESTAMP,
                deleted_at TIMESTAMP,
                CONSTRAINT user_id PRIMARY KEY (id)
);


CREATE TABLE data_frames (
                id INTEGER NOT NULL,
                user_id INTEGER NOT NULL,
                data VARCHAR,
                meta_data VARCHAR,
                created_at TIMESTAMP,
                updated_at TIMESTAMP,
                deleted_at TIMESTAMP,
                titulo VARCHAR(255),
                CONSTRAINT data_frame_id PRIMARY KEY (id)
);


ALTER TABLE data_frames ADD CONSTRAINT users_data_frames_fk
FOREIGN KEY (user_id)
REFERENCES users (id)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;