
CREATE TABLE public.users (
                id INTEGER NOT NULL,
                name VARCHAR(255) NOT NULL,
                password VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                created_at TIMESTAMP NOT NULL,
                updated_at TIMESTAMP,
                deleted_at TIMESTAMP,
                CONSTRAINT user_id PRIMARY KEY (id)
);


CREATE TABLE public.data_frames (
                id INTEGER NOT NULL,
                user_id INTEGER NOT NULL,
                data VARCHAR NOT NULL,
                meta_data VARCHAR NOT NULL,
                created_at TIMESTAMP NOT NULL,
                updated_at TIMESTAMP,
                deleted_at TIMESTAMP,
                CONSTRAINT data_frame_id PRIMARY KEY (id)
);


ALTER TABLE public.data_frames ADD CONSTRAINT users_data_frames_fk
FOREIGN KEY (user_id)
REFERENCES public.users (id)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;