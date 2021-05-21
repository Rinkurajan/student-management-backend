@if($lists->isEmpty())
<section class="content">
    <div class="empty-state-container">
        <img class="empty-state-img" src="{{ asset('backend/images/empty.svg') }}">
        <h3>No Records Found.</h3>
    </div>
</section>
@endif

<style>
    .empty-state-container {
        text-align: center;
        margin-top: 50px;
    }

    .empty-state-img {
        margin: 0 auto;
        float: none;
        text-align: center;
        width: 130px;
    }

    .empty-state-container h3 {
        margin-top: 20px;
        font-weight: 600;
        font-size: 20px;
        margin-bottom: 40px;
    }

    .empty-state-container p {
        color: #666;
        font-weight: 500;
    }
</style>