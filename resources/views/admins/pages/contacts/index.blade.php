@extends('layouts.admin')

@section('title')
    ADMINISTRATION
@endsection

@section('content')
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-msg">
                <div class="nk-msg-aside">
                    <div class="nk-msg-nav">
                        <ul class="nk-msg-menu">
                            <li class="nk-msg-menu-item active">
                                <a href="">Active</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nk-msg-list" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 0px;">
                                            @foreach($contacts as $contact)
                                            <div class="nk-msg-item current" data-msg-id="1">
                                                <div class="nk-msg-media user-avatar">
                                                    <span>{{ substr($contact->username, 0,1) }}</span>
                                                </div>
                                                <div class="nk-msg-info">
                                                    <div class="nk-msg-from">
                                                        <div class="nk-msg-sender">
                                                            <div class="name">{{ $contact->username ?? "" }}</div>
                                                        </div>
                                                        <div class="nk-msg-meta">
                                                            <div class="date">{{ $contact->created_at->diffForHumans() }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-msg-context">
                                                        <div class="nk-msg-text">
                                                            <h6 class="title">{{ substr($contact->motif, 0, 20) }}</h6>
                                                            <p>
                                                                {{ substr($contact->description,0, 50) }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: auto; height: 1208px;"></div>
                        </div>
                    </div>
                </div>
                <div class="nk-msg-body bg-white">
                    <div class="nk-msg-head"></div>
                    <div class="nk-msg-reply nk-reply" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 0px;">
                                            @foreach($contacts as $contact)
                                            <div class="nk-reply-item">
                                                <div class="nk-reply-header">
                                                    <div class="user-card">
                                                        <div class="user-avatar sm bg-blue">
                                                            <span>{{ substr($contact->username,0,2) }}</span>
                                                        </div>
                                                        <div class="user-name">{{ $contact->username ?? "" }}</div>
                                                    </div>
                                                    <div class="date-time">{{ $contact->created_at->diffForHumans() }}</div>
                                                </div>
                                                <div class="nk-reply-body">
                                                    <div class="nk-reply-entry entry">
                                                        <p>{{ $contact->motif ?? "" }},</p>
                                                        <p>
                                                            {{ $contact->description ?? "" }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: auto; height: 1502px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
