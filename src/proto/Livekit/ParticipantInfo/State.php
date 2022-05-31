<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_models.proto

namespace Livekit\ParticipantInfo;

/**
 * Protobuf type <code>livekit.ParticipantInfo.State</code>
 */
class State
{
    /**
     * websocket' connected, but not offered yet
     *
     * Generated from protobuf enum <code>JOINING = 0;</code>
     */
    const JOINING = 0;
    /**
     * server received client offer
     *
     * Generated from protobuf enum <code>JOINED = 1;</code>
     */
    const JOINED = 1;
    /**
     * ICE connectivity established
     *
     * Generated from protobuf enum <code>ACTIVE = 2;</code>
     */
    const ACTIVE = 2;
    /**
     * WS disconnected
     *
     * Generated from protobuf enum <code>DISCONNECTED = 3;</code>
     */
    const DISCONNECTED = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(State::class, \Livekit\ParticipantInfo_State::class);
