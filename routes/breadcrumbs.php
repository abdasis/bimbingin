<?php // routes/breadcrumbs.php


use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Beranda
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

Breadcrumbs::for('proposal.create', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Pendaftaran', route('proposal.create'));
});

Breadcrumbs::for('students.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Mahasiswa', route('students.index'));
});

Breadcrumbs::for('students.create', function (BreadcrumbTrail $trail) {
    $trail->parent('students.index');
    $trail->push('Tambah', route('students.create'));
});

Breadcrumbs::for('students.edit', function (BreadcrumbTrail $trail, $student) {
    $trail->parent('students.index');
    $trail->push($student->name, route('students.edit', $student));
});

Breadcrumbs::for('students.detail', function (BreadcrumbTrail $trail, $student) {
    $trail->parent('students.index');
    $trail->push($student->name, route('students.detail', $student));
});

Breadcrumbs::for('schedules.index', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Jadwal', route('schedules.index'));
});

Breadcrumbs::for('schedules.create', function (BreadcrumbTrail $trail) {
    $trail->parent('schedules.index');
    $trail->push('Tambah', route('schedules.create'));
});

Breadcrumbs::for('schedules.edit', function (BreadcrumbTrail $trail, $schedule) {
    $trail->parent('schedules.index');
    $trail->push($schedule->name, route('schedules.edit', $schedule));
});

Breadcrumbs::for('schedules.detail', function (BreadcrumbTrail $trail, $schedule) {
    $trail->parent('schedules.index');
    $trail->push($schedule->name, route('schedules.detail', $schedule));
});


