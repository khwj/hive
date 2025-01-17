<?php
/**
 * Autogenerated by Thrift Compiler (0.14.1)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

final class OperatorType
{
    const JOIN = 0;

    const MAPJOIN = 1;

    const EXTRACT = 2;

    const FILTER = 3;

    const FORWARD = 4;

    const GROUPBY = 5;

    const LIMIT = 6;

    const SCRIPT = 7;

    const SELECT = 8;

    const TABLESCAN = 9;

    const FILESINK = 10;

    const REDUCESINK = 11;

    const UNION = 12;

    const UDTF = 13;

    const LATERALVIEWJOIN = 14;

    const LATERALVIEWFORWARD = 15;

    const HASHTABLESINK = 16;

    const HASHTABLEDUMMY = 17;

    const PTF = 18;

    const MUX = 19;

    const DEMUX = 20;

    const EVENT = 21;

    const ORCFILEMERGE = 22;

    const RCFILEMERGE = 23;

    const MERGEJOIN = 24;

    const TOPNKEY = 25;

    static public $__names = array(
        0 => 'JOIN',
        1 => 'MAPJOIN',
        2 => 'EXTRACT',
        3 => 'FILTER',
        4 => 'FORWARD',
        5 => 'GROUPBY',
        6 => 'LIMIT',
        7 => 'SCRIPT',
        8 => 'SELECT',
        9 => 'TABLESCAN',
        10 => 'FILESINK',
        11 => 'REDUCESINK',
        12 => 'UNION',
        13 => 'UDTF',
        14 => 'LATERALVIEWJOIN',
        15 => 'LATERALVIEWFORWARD',
        16 => 'HASHTABLESINK',
        17 => 'HASHTABLEDUMMY',
        18 => 'PTF',
        19 => 'MUX',
        20 => 'DEMUX',
        21 => 'EVENT',
        22 => 'ORCFILEMERGE',
        23 => 'RCFILEMERGE',
        24 => 'MERGEJOIN',
        25 => 'TOPNKEY',
    );
}

