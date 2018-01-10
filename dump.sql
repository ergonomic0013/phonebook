--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.3
-- Dumped by pg_dump version 9.6.3

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: session_msg; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE session_msg (
    id integer NOT NULL,
    cid character varying(255) NOT NULL,
    sid character varying(255) DEFAULT NULL::character varying,
    uid character varying(255) DEFAULT NULL::character varying,
    url character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE session_msg OWNER TO postgres;

--
-- Name: session_msg_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE session_msg_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE session_msg_id_seq OWNER TO postgres;

--
-- Name: session_msg_sess_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE session_msg_sess_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE session_msg_sess_id_seq OWNER TO postgres;

--
-- Name: traking_msg; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE traking_msg (
    id integer NOT NULL,
    fkey_utm_params integer,
    fkey_visitors integer,
    cid character varying(255) NOT NULL,
    trk character varying(255) DEFAULT NULL::character varying,
    url character varying(255) NOT NULL,
    sid character varying(255) DEFAULT NULL::character varying,
    uid character varying(255) DEFAULT NULL::character varying,
    endpoint character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE traking_msg OWNER TO postgres;

--
-- Name: traking_msg_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE traking_msg_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE traking_msg_id_seq OWNER TO postgres;

--
-- Name: utm_params; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE utm_params (
    id integer NOT NULL,
    source character varying(255) DEFAULT NULL::character varying,
    content character varying(255) DEFAULT NULL::character varying,
    campaign character varying(255) DEFAULT NULL::character varying,
    medium character varying(255) DEFAULT NULL::character varying,
    term character varying(255) DEFAULT NULL::character varying
);


ALTER TABLE utm_params OWNER TO postgres;

--
-- Name: utm_params_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE utm_params_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE utm_params_id_seq OWNER TO postgres;

--
-- Name: visitors; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE visitors (
    id integer NOT NULL,
    ip character varying(255) NOT NULL,
    lg character varying(255) NOT NULL,
    rf character varying(255) NOT NULL,
    ua character varying(255) NOT NULL
);


ALTER TABLE visitors OWNER TO postgres;

--
-- Name: visitors_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE visitors_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE visitors_id_seq OWNER TO postgres;

--
-- Name: session_msg session_msg_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY session_msg
    ADD CONSTRAINT session_msg_pkey PRIMARY KEY (id);


--
-- Name: traking_msg traking_msg_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY traking_msg
    ADD CONSTRAINT traking_msg_pkey PRIMARY KEY (id);


--
-- Name: utm_params utm_params_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY utm_params
    ADD CONSTRAINT utm_params_pkey PRIMARY KEY (id);


--
-- Name: visitors visitors_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY visitors
    ADD CONSTRAINT visitors_pkey PRIMARY KEY (id);


--
-- Name: idx_123eb93a28db8299; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_123eb93a28db8299 ON traking_msg USING btree (fkey_utm_params);


--
-- Name: idx_123eb93a60c0eade; Type: INDEX; Schema: public; Owner: postgres
--

CREATE INDEX idx_123eb93a60c0eade ON traking_msg USING btree (fkey_visitors);


--
-- Name: traking_msg fk_123eb93a28db8299; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY traking_msg
    ADD CONSTRAINT fk_123eb93a28db8299 FOREIGN KEY (fkey_utm_params) REFERENCES utm_params(id);


--
-- Name: traking_msg fk_123eb93a60c0eade; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY traking_msg
    ADD CONSTRAINT fk_123eb93a60c0eade FOREIGN KEY (fkey_visitors) REFERENCES visitors(id);


--
-- PostgreSQL database dump complete
--

