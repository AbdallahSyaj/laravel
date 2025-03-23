@extends('layout')
@section('title', 'Computer')

@section('content')
<div class="content-container">
    <div class="page-header">
        <h1>Computer Listing</h1>
        <p class="lead-text">
            Browse our comprehensive collection of computers. Each item features detailed specifications and competitive pricing to help you find the perfect match for your computing needs.
        </p>
    </div>

    <div class="computer-list-container">
        @if (count($computers) > 0)
            <ul class="computer-list">
                @foreach ($computers as $computer)
                    <li class="computer-item">
                        <a href="{{ route('computer.show', ['computer' => $computer['id']]) }}" class="computer-link">
                            <div class="computer-card">
                                <div class="computer-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M4 5v11h16V5H4zm-2-.5C2 3.67 3.67 2 5.5 2h13C20.33 2 22 3.67 22 5.5v13c0 1.83-1.67 3.5-3.5 3.5h-13C3.67 22 2 20.33 2 18.5v-14z" fill="currentColor"/></svg>
                                </div>
                                <div class="computer-details">
                                    <span class="computer-name">{{ $computer['name'] . "                           
                                    " . $computer['model'] . "                    
                                    " . $computer['price'].'$'}}</span>
                                    <span class="view-details">View details</span>
                                </div>
                                <div class="arrow-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z" fill="currentColor"/></svg>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        @else
            <div class="empty-state">
                <div class="empty-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48"><path fill="none" d="M0 0h24v24H0z"/><path d="M13 10h7l-9 13v-9H4l9-13z" fill="currentColor"/></svg>
                </div>
                <p class="empty-message">No computers found</p>
                <a href="{{ route('computer.create') }}" class="add-computer-btn">Add Your First Computer</a>
            </div>
        @endif
    </div>
</div>

<style>
    .content-container {
        padding: 30px 0;
        max-width: 800px;
        margin: 0 auto;
    }

    .page-header {
        margin-bottom: 30px;
        text-align: center;
    }

    .page-header h1 {
        color: var(--primary-color, #4361ee);
        font-size: 2.2rem;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .lead-text {
        color: #6c757d;
        line-height: 1.6;
        max-width: 600px;
        margin: 0 auto;
    }

    .computer-list-container {
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .computer-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .computer-item {
        border-bottom: 1px solid #eee;
    }

    .computer-item:last-child {
        border-bottom: none;
    }

    .computer-link {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .computer-card {
        display: flex;
        align-items: center;
        padding: 16px 20px;
        transition: background-color 0.2s ease;
    }

    .computer-card:hover {
        background-color: #f8f9fa;
    }

    .computer-icon {
        background-color: rgba(67, 97, 238, 0.1);
        width: 40px;
        height: 40px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color, #4361ee);
        margin-right: 16px;
        flex-shrink: 0;
    }

    .computer-details {
        flex: 1;
    }

    .computer-name {
        display: block;
        font-weight: 500;
        font-size: 1.05rem;
        color: #212529;
        margin-bottom: 4px;
    }

    .view-details {
        font-size: 0.85rem;
        color: #6c757d;
    }

    .arrow-icon {
        color: #6c757d;
        opacity: 0.5;
        transition: opacity 0.2s ease, transform 0.2s ease;
    }

    .computer-card:hover .arrow-icon {
        opacity: 1;
        transform: translateX(3px);
    }

    .empty-state {
        text-align: center;
        padding: 50px 20px;
    }

    .empty-icon {
        color: #ccc;
        margin-bottom: 15px;
    }

    .empty-message {
        color: #6c757d;
        font-size: 1.1rem;
        margin-bottom: 20px;
    }

    .add-computer-btn {
        display: inline-block;
        background-color: var(--primary-color, #4361ee);
        color: white;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 8px;
        font-weight: 500;
        transition: background-color 0.2s ease, transform 0.2s ease;
    }

    .add-computer-btn:hover {
        background-color: var(--secondary-color, #3f37c9);
        transform: translateY(-2px);
    }

    @media (max-width: 576px) {
        .content-container {
            padding: 20px 15px;
        }

        .page-header h1 {
            font-size: 1.8rem;
        }

        .computer-card {
            padding: 12px 15px;
        }

        .computer-icon {
            width: 32px;
            height: 32px;
        }

        .computer-name {
            font-size: 1rem;
        }
    }
</style>
@endsection