<?php
/* @var $this QuestionController */
/* @var $dataProvider CActiveDataProvider */

use yii\widgets\ListView;
?>

<style>


    .panel .panel-heading {
        font-size: 18px;
        font-weight: 400;
        border-bottom: 1px solid #E6E6E6;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
    }

    .panel .panel-with-padding {
        padding: 20px;
    }



</style>
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <div class="panel panel-default qanda-panel">
                <div class="panel-heading">
                    Important
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Announcements</b>
                        <p class="list-group-item-text">Sed do eiusmod tempor incididunt</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Helpful Threads</b>
                        <p class="list-group-item-text">Lorem ipsum dolor sit amet</p>
                    </a>
                </div>
            </div>

            <div class="panel panel-default qanda-panel">
                <div class="panel-heading">
                    Property Market
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Trends</b>
                        <p class="list-group-item-text">Nam sagittis libero est, eget mollis lacus facilisis non</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Hot Spots & Opportunities</b>
                        <p class="list-group-item-text">Curabitur blandit tristique eros, non aliquam sapien mollis nec</p>
                    </a>
                </div>
            </div>

            <div class="panel panel-default qanda-panel">
                <div class="panel-heading">
                    Investment
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Search</b>
                        <p class="list-group-item-text">Proin magna mauris, mattis sodales tortor quis.</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Purchase</b>
                        <p class="list-group-item-text">Nam sagittis libero est, eget mollis lacus facilisis non</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Finance</b>
                        <p class="list-group-item-text">Aenean arcu magna, lobortis eu orci in, elementum placerat nisl.</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Insurance</b>
                        <p class="list-group-item-text">Curabitur blandit tristique eros, non aliquam sapien mollis nec</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Tax Matters</b>
                        <p class="list-group-item-text">Curabitur blandit tristique eros, non aliquam sapien mollis nec</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Rentals & Tenants</b>
                        <p class="list-group-item-text">Curabitur blandit tristique eros, non aliquam sapien mollis nec</p>
                    </a>
                </div>
            </div>



        </div>

        <div class="col-md-6">
            <div class="panel panel-default qanda-panel">
                <div class="panel-heading">
                    First Home
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Search</b>
                        <p class="list-group-item-text">Aenean arcu magna, lobortis eu orci in, elementum placerat nisl.</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Purchase</b>
                        <p class="list-group-item-text">Mauris convallis, nunc id porta lacinia, turpis eros lobortis ligula.</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Finance</b>
                        <p class="list-group-item-text">Proin magna mauris, mattis sodales tortor quis.</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Insurance</b>
                        <p class="list-group-item-text">Sed viverra sem in ante interdum vestibulum.</p>
                    </a>
                </div>
            </div>
            <div class="panel panel-default qanda-panel">
                <div class="panel-heading">
                    Upgrading Home
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Search</b>
                        <p class="list-group-item-text">Aenean arcu magna, lobortis eu orci in, elementum placerat nisl.</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Purchase</b>
                        <p class="list-group-item-text">Mauris convallis, nunc id porta lacinia, turpis eros lobortis ligula.</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Finance</b>
                        <p class="list-group-item-text">Proin magna mauris, mattis sodales tortor quis.</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Insurance</b>
                        <p class="list-group-item-text">Sed viverra sem in ante interdum vestibulum.</p>
                    </a>
                </div>
            </div>
            <div class="panel panel-default qanda-panel">
                <div class="panel-heading">
                    Renovation & Maintenance
                </div>
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Builders & Trades</b>
                        <p class="list-group-item-text">Aenean arcu magna, lobortis eu orci in, elementum placerat nisl.</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Council & Planning</b>
                        <p class="list-group-item-text">Mauris convallis, nunc id porta lacinia, turpis eros lobortis ligula.</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Finance</b>
                        <p class="list-group-item-text">Proin magna mauris, mattis sodales tortor quis.</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <b class="list-group-item-heading">Owner/Builder</b>
                        <p class="list-group-item-text">Sed viverra sem in ante interdum vestibulum.</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end: show content -->
