<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>SSC Batch 1984 Bangladesh</title>
    <style>
        /* Add a black background color to the top navigation */
        .topnav {
            background-color: #90EE90;
            overflow: hidden;
        }

        /* Style the links inside the navigation bar */
        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 40px 40px;
            text-decoration: none;
            font-size: 25px;
        }

        /* Change the color of links on hover */
        .topnav a:hover {
            background-color: #ffffff;
            color: black;
        }

        /* Add a color to the active/current link */
        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
        .logo{
            float: right;
            height: 180px;
            width: 400px;
            alignment: center;
        }
        body{
            text-align: center;
        }
        .middle-container{
            text-align: center;
            width: 600px;
            padding: 60px;
            margin-left: auto;
            margin-right: auto;
            background-color: #D0F1E8;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
        }
        .titleheading{
            padding: 9px;
            color: #555555;
            font-size: 30px;
        }
        .table{
            border-collapse: separate;
            border-spacing: 5px;
            width: 100%;
            margin-bottom: 20px;
            max-width: 100%;
            background-color: white;
            display: table;
            box-sizing: border-box;
            text-indent: initial;
            border-color: black;
        }
        tr{
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }
        td{
            background: #fff;
            border-radius: 5px;
            text-align: left;
            font-size: 15px;
            padding: 5px;
            vertical-align: middle;
            line-height: 20px;
            border: 3px solid #dddddd;
            display: table-cell;
        }
    </style>
</head>
<div class="topnav">
    <img class="logo" src="{{ asset('assets/logo.png') }}" alt="logo">
    <a href="/">Home</a>
    <a href="/register">Register Now</a>
    <a href="/registrars">View Registrars</a>
</div>

<div class="middle-container">
    <div class="titleheading">
        <h1>{{ $settings['event_name'] }} </h1>
    </div>

    <table class="table">
        <tbody>
        <tr>
            <td>Event Location : </td>
            <td>{{ $settings['venue_location'] }}</td>
        </tr>
        <tr>
            <td>Date : </td>
            <td colspan="3">{{ $settings['event_date'] }}</td>
        </tr>
        <tr>
            <td>Day : </td>
            <td>{{ $settings['event_day'] }}</td>
        </tr>
        <tr>
            <td>Event Location : </td>
            <td>{{ $settings['venue_location'] }}</td>
        </tr>
        <tr>
            <td>Time : </td>
            <td>{{ $settings['event_time_slot'] }}</td>
        </tr>

        </tbody>
    </table>
</div>


