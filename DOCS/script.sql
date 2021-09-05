create table users
(
    id       int auto_increment
        primary key,
    pp       varchar(500) null,
    fullname varchar(100) null,
    username varchar(50)  null,
    email    varchar(50)  null,
    phone    varchar(50)  null,
    pass     varchar(50)  null,
    nid      varchar(50)  null,
    dob      varchar(50)  null,
    gender   varchar(50)  null,
    address  varchar(100) null,
    city     varchar(50)  null,
    state    varchar(50)  null,
    zip      varchar(50)  null,
    type     varchar(50)  null
);

create table cases
(
    id               int auto_increment
        primary key,
    case_title       varchar(100) null,
    case_description varchar(500) null,
    date_added       varchar(50)  null,
    hearing_date     varchar(50)  null,
    case_status      varchar(50)  null,
    document         varchar(500) null,
    client_id        int          null,
    complainant_id   int          null,
    judge_id         int          null,
    lawyer_id        int          null,
    constraint cases_users_id_fk
        foreign key (client_id) references users (id)
            on delete cascade,
    constraint cases_users_id_fk_2
        foreign key (complainant_id) references users (id)
            on delete cascade,
    constraint cases_users_id_fk_3
        foreign key (judge_id) references users (id)
            on delete cascade,
    constraint cases_users_id_fk_4
        foreign key (lawyer_id) references users (id)
            on delete cascade
);

create table clients
(
    id        int auto_increment
        primary key,
    client_id int null,
    lawyer_id int null,
    constraint clients_users_id_fk
        foreign key (client_id) references users (id)
            on delete cascade,
    constraint clients_users_id_fk_2
        foreign key (lawyer_id) references users (id)
            on delete cascade
);

create table documents
(
    id          int auto_increment
        primary key,
    document    varchar(500) null,
    viewer_id   int          null,
    uploader_id int          null,
    constraint documents_users_id_fk
        foreign key (viewer_id) references users (id)
            on delete cascade,
    constraint documents_users_id_fk_2
        foreign key (uploader_id) references users (id)
            on delete cascade
);

create table meetings
(
    id                  int auto_increment
        primary key,
    attandee_name       varchar(50)  null,
    organizer_name      varchar(50)  null,
    meeting_title       varchar(100) null,
    meeting_description varchar(500) null,
    meeting_time        varchar(50)  null,
    attandee_id         int          null,
    organizer_id        int          null,
    constraint meetings_users_id_fk
        foreign key (attandee_id) references users (id)
            on delete cascade,
    constraint meetings_users_id_fk_2
        foreign key (organizer_id) references users (id)
            on delete cascade
);

create table payments
(
    id           int auto_increment
        primary key,
    due          varchar(50) null,
    paid         varchar(50) null,
    balance      varchar(50) null,
    due_date     varchar(50) null,
    payment_date varchar(50) null,
    payer_id     int         null,
    receiver_id  int         null,
    constraint payments_users_id_fk
        foreign key (payer_id) references users (id)
            on delete cascade,
    constraint payments_users_id_fk_2
        foreign key (receiver_id) references users (id)
            on delete cascade
);

create table reports
(
    id             int auto_increment
        primary key,
    monthly        varchar(500) null,
    weekly         varchar(500) null,
    transactions   varchar(500) null,
    date_generated varchar(50)  null,
    generator_id   int          null,
    constraint reports_users_id_fk
        foreign key (generator_id) references users (id)
            on delete cascade
);

create table reviews
(
    id          int auto_increment
        primary key,
    review      varchar(500) null,
    rating      varchar(50)  null,
    reviewer_id int          null,
    reviewee_id int          null,
    constraint reviews_users_id_fk
        foreign key (reviewer_id) references users (id)
            on delete cascade,
    constraint reviews_users_id_fk_2
        foreign key (reviewee_id) references users (id)
            on delete cascade
);


