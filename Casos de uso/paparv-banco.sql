
CREATE SEQUENCE users_id_seq;

CREATE TABLE users (
                id INTEGER NOT NULL DEFAULT nextval('users_id_seq'),
                name VARCHAR(255),
                password VARCHAR(255),
                email VARCHAR(255),
                created_at TIMESTAMP,
                updated_at TIMESTAMP,
                CONSTRAINT user_id PRIMARY KEY (id)
);


ALTER SEQUENCE users_id_seq OWNED BY users.id;

CREATE SEQUENCE data_frames_id_seq;

CREATE TABLE data_frames (
                id INTEGER NOT NULL DEFAULT nextval('data_frames_id_seq'),
                user_id INTEGER NOT NULL,
                data jsonb,
                created_at TIMESTAMP,
                updated_at TIMESTAMP,
                titulo VARCHAR(255),
                CONSTRAINT data_frame_id PRIMARY KEY (id)
);


ALTER SEQUENCE data_frames_id_seq OWNED BY data_frames.id;

ALTER TABLE data_frames ADD CONSTRAINT users_data_frames_fk
FOREIGN KEY (user_id)
REFERENCES users (id)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;