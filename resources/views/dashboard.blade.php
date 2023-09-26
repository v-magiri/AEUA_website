@extends('layouts.master')
@section('title','Home')

@section('content')
    <div class="stats-board">
        <div class="item">
            <i class="fa-solid fa-users"></i>
            <span class="item_count">14</span> 
            <span class="item_title">Total Members</span>            
        </div>
        <div class="item">
            <i class="fa-solid fa-calendar"></i>          
            <span class="item_count">14</span>
            <span class="item_title">Upcoming Events</span>  
             
        </div>
        <div class="item">
            <i class="fa-solid fa-square-rss"></i>
            <span class="item_count">14</span>   
            <span class="item_title">Newsletters</span> 
        </div>
    </div>
    <div class="listing">
        <div class="table-wrapper">
            <span>Upcoming Events</span>
        </div>
        <div class="table_listing">
            <table>
                <tr>
                    <th>Company</th>
                    <th>Contact</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                    <td>Germany</td>
                </tr>
                <tr>
                    <td>Centro comercial Moctezuma</td>
                    <td>Francisco Chang</td>
                    <td>Mexico</td>
                </tr>
            </table>
        </div>

    </div>
@stop