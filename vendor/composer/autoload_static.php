<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc220412ce868d8d3a16f2a6ccfd56811
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
        '972fda704d680a3a53c68e34e193cb22' => __DIR__ . '/..' . '/react/promise-timer/src/functions_include.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Remini\\' => 7,
            'React\\Stream\\' => 13,
            'React\\Socket\\' => 13,
            'React\\Promise\\Timer\\' => 20,
            'React\\Promise\\' => 14,
            'React\\EventLoop\\' => 16,
            'React\\Dns\\' => 10,
            'React\\Cache\\' => 12,
        ),
        'L' => 
        array (
            'League\\Event\\' => 13,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Remini\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'React\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/stream/src',
        ),
        'React\\Socket\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/socket/src',
        ),
        'React\\Promise\\Timer\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise-timer/src',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'React\\EventLoop\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/event-loop/src',
        ),
        'React\\Dns\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/dns/src',
        ),
        'React\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/cache/src',
        ),
        'League\\Event\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/event/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'E' => 
        array (
            'Evenement' => 
            array (
                0 => __DIR__ . '/..' . '/evenement/evenement/src',
            ),
        ),
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Bramus\\Router\\Router' => __DIR__ . '/..' . '/bramus/router/src/Bramus/Router/Router.php',
        'Evenement\\EventEmitter' => __DIR__ . '/..' . '/evenement/evenement/src/Evenement/EventEmitter.php',
        'Evenement\\EventEmitterInterface' => __DIR__ . '/..' . '/evenement/evenement/src/Evenement/EventEmitterInterface.php',
        'Evenement\\EventEmitterTrait' => __DIR__ . '/..' . '/evenement/evenement/src/Evenement/EventEmitterTrait.php',
        'FastRoute\\BadRouteException' => __DIR__ . '/..' . '/nikic/fast-route/src/BadRouteException.php',
        'FastRoute\\DataGenerator' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator.php',
        'FastRoute\\DataGenerator\\CharCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/CharCountBased.php',
        'FastRoute\\DataGenerator\\GroupCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/GroupCountBased.php',
        'FastRoute\\DataGenerator\\GroupPosBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/GroupPosBased.php',
        'FastRoute\\DataGenerator\\MarkBased' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/MarkBased.php',
        'FastRoute\\DataGenerator\\RegexBasedAbstract' => __DIR__ . '/..' . '/nikic/fast-route/src/DataGenerator/RegexBasedAbstract.php',
        'FastRoute\\Dispatcher' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher.php',
        'FastRoute\\Dispatcher\\CharCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/CharCountBased.php',
        'FastRoute\\Dispatcher\\GroupCountBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/GroupCountBased.php',
        'FastRoute\\Dispatcher\\GroupPosBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/GroupPosBased.php',
        'FastRoute\\Dispatcher\\MarkBased' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/MarkBased.php',
        'FastRoute\\Dispatcher\\RegexBasedAbstract' => __DIR__ . '/..' . '/nikic/fast-route/src/Dispatcher/RegexBasedAbstract.php',
        'FastRoute\\Route' => __DIR__ . '/..' . '/nikic/fast-route/src/Route.php',
        'FastRoute\\RouteCollector' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteCollector.php',
        'FastRoute\\RouteParser' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteParser.php',
        'FastRoute\\RouteParser\\Std' => __DIR__ . '/..' . '/nikic/fast-route/src/RouteParser/Std.php',
        'League\\Event\\AbstractEvent' => __DIR__ . '/..' . '/league/event/src/AbstractEvent.php',
        'League\\Event\\AbstractListener' => __DIR__ . '/..' . '/league/event/src/AbstractListener.php',
        'League\\Event\\BufferedEmitter' => __DIR__ . '/..' . '/league/event/src/BufferedEmitter.php',
        'League\\Event\\CallbackListener' => __DIR__ . '/..' . '/league/event/src/CallbackListener.php',
        'League\\Event\\Emitter' => __DIR__ . '/..' . '/league/event/src/Emitter.php',
        'League\\Event\\EmitterAwareInterface' => __DIR__ . '/..' . '/league/event/src/EmitterAwareInterface.php',
        'League\\Event\\EmitterAwareTrait' => __DIR__ . '/..' . '/league/event/src/EmitterAwareTrait.php',
        'League\\Event\\EmitterInterface' => __DIR__ . '/..' . '/league/event/src/EmitterInterface.php',
        'League\\Event\\EmitterTrait' => __DIR__ . '/..' . '/league/event/src/EmitterTrait.php',
        'League\\Event\\Event' => __DIR__ . '/..' . '/league/event/src/Event.php',
        'League\\Event\\EventInterface' => __DIR__ . '/..' . '/league/event/src/EventInterface.php',
        'League\\Event\\Generator' => __DIR__ . '/..' . '/league/event/src/Generator.php',
        'League\\Event\\GeneratorInterface' => __DIR__ . '/..' . '/league/event/src/GeneratorInterface.php',
        'League\\Event\\GeneratorTrait' => __DIR__ . '/..' . '/league/event/src/GeneratorTrait.php',
        'League\\Event\\ListenerAcceptor' => __DIR__ . '/..' . '/league/event/src/ListenerAcceptor.php',
        'League\\Event\\ListenerAcceptorInterface' => __DIR__ . '/..' . '/league/event/src/ListenerAcceptorInterface.php',
        'League\\Event\\ListenerInterface' => __DIR__ . '/..' . '/league/event/src/ListenerInterface.php',
        'League\\Event\\ListenerProviderInterface' => __DIR__ . '/..' . '/league/event/src/ListenerProviderInterface.php',
        'League\\Event\\OneTimeListener' => __DIR__ . '/..' . '/league/event/src/OneTimeListener.php',
        'React\\Cache\\ArrayCache' => __DIR__ . '/..' . '/react/cache/src/ArrayCache.php',
        'React\\Cache\\CacheInterface' => __DIR__ . '/..' . '/react/cache/src/CacheInterface.php',
        'React\\Dns\\BadServerException' => __DIR__ . '/..' . '/react/dns/src/BadServerException.php',
        'React\\Dns\\Config\\Config' => __DIR__ . '/..' . '/react/dns/src/Config/Config.php',
        'React\\Dns\\Config\\HostsFile' => __DIR__ . '/..' . '/react/dns/src/Config/HostsFile.php',
        'React\\Dns\\Model\\Message' => __DIR__ . '/..' . '/react/dns/src/Model/Message.php',
        'React\\Dns\\Model\\Record' => __DIR__ . '/..' . '/react/dns/src/Model/Record.php',
        'React\\Dns\\Protocol\\BinaryDumper' => __DIR__ . '/..' . '/react/dns/src/Protocol/BinaryDumper.php',
        'React\\Dns\\Protocol\\Parser' => __DIR__ . '/..' . '/react/dns/src/Protocol/Parser.php',
        'React\\Dns\\Query\\CachingExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/CachingExecutor.php',
        'React\\Dns\\Query\\CancellationException' => __DIR__ . '/..' . '/react/dns/src/Query/CancellationException.php',
        'React\\Dns\\Query\\CoopExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/CoopExecutor.php',
        'React\\Dns\\Query\\ExecutorInterface' => __DIR__ . '/..' . '/react/dns/src/Query/ExecutorInterface.php',
        'React\\Dns\\Query\\HostsFileExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/HostsFileExecutor.php',
        'React\\Dns\\Query\\Query' => __DIR__ . '/..' . '/react/dns/src/Query/Query.php',
        'React\\Dns\\Query\\RetryExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/RetryExecutor.php',
        'React\\Dns\\Query\\SelectiveTransportExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/SelectiveTransportExecutor.php',
        'React\\Dns\\Query\\TcpTransportExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/TcpTransportExecutor.php',
        'React\\Dns\\Query\\TimeoutException' => __DIR__ . '/..' . '/react/dns/src/Query/TimeoutException.php',
        'React\\Dns\\Query\\TimeoutExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/TimeoutExecutor.php',
        'React\\Dns\\Query\\UdpTransportExecutor' => __DIR__ . '/..' . '/react/dns/src/Query/UdpTransportExecutor.php',
        'React\\Dns\\RecordNotFoundException' => __DIR__ . '/..' . '/react/dns/src/RecordNotFoundException.php',
        'React\\Dns\\Resolver\\Factory' => __DIR__ . '/..' . '/react/dns/src/Resolver/Factory.php',
        'React\\Dns\\Resolver\\Resolver' => __DIR__ . '/..' . '/react/dns/src/Resolver/Resolver.php',
        'React\\Dns\\Resolver\\ResolverInterface' => __DIR__ . '/..' . '/react/dns/src/Resolver/ResolverInterface.php',
        'React\\EventLoop\\ExtEvLoop' => __DIR__ . '/..' . '/react/event-loop/src/ExtEvLoop.php',
        'React\\EventLoop\\ExtEventLoop' => __DIR__ . '/..' . '/react/event-loop/src/ExtEventLoop.php',
        'React\\EventLoop\\ExtLibevLoop' => __DIR__ . '/..' . '/react/event-loop/src/ExtLibevLoop.php',
        'React\\EventLoop\\ExtLibeventLoop' => __DIR__ . '/..' . '/react/event-loop/src/ExtLibeventLoop.php',
        'React\\EventLoop\\ExtUvLoop' => __DIR__ . '/..' . '/react/event-loop/src/ExtUvLoop.php',
        'React\\EventLoop\\Factory' => __DIR__ . '/..' . '/react/event-loop/src/Factory.php',
        'React\\EventLoop\\LoopInterface' => __DIR__ . '/..' . '/react/event-loop/src/LoopInterface.php',
        'React\\EventLoop\\SignalsHandler' => __DIR__ . '/..' . '/react/event-loop/src/SignalsHandler.php',
        'React\\EventLoop\\StreamSelectLoop' => __DIR__ . '/..' . '/react/event-loop/src/StreamSelectLoop.php',
        'React\\EventLoop\\Tick\\FutureTickQueue' => __DIR__ . '/..' . '/react/event-loop/src/Tick/FutureTickQueue.php',
        'React\\EventLoop\\TimerInterface' => __DIR__ . '/..' . '/react/event-loop/src/TimerInterface.php',
        'React\\EventLoop\\Timer\\Timer' => __DIR__ . '/..' . '/react/event-loop/src/Timer/Timer.php',
        'React\\EventLoop\\Timer\\Timers' => __DIR__ . '/..' . '/react/event-loop/src/Timer/Timers.php',
        'React\\Promise\\CancellablePromiseInterface' => __DIR__ . '/..' . '/react/promise/src/CancellablePromiseInterface.php',
        'React\\Promise\\CancellationQueue' => __DIR__ . '/..' . '/react/promise/src/CancellationQueue.php',
        'React\\Promise\\Deferred' => __DIR__ . '/..' . '/react/promise/src/Deferred.php',
        'React\\Promise\\Exception\\LengthException' => __DIR__ . '/..' . '/react/promise/src/Exception/LengthException.php',
        'React\\Promise\\ExtendedPromiseInterface' => __DIR__ . '/..' . '/react/promise/src/ExtendedPromiseInterface.php',
        'React\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/react/promise/src/FulfilledPromise.php',
        'React\\Promise\\LazyPromise' => __DIR__ . '/..' . '/react/promise/src/LazyPromise.php',
        'React\\Promise\\Promise' => __DIR__ . '/..' . '/react/promise/src/Promise.php',
        'React\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/react/promise/src/PromiseInterface.php',
        'React\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/react/promise/src/PromisorInterface.php',
        'React\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/react/promise/src/RejectedPromise.php',
        'React\\Promise\\Timer\\TimeoutException' => __DIR__ . '/..' . '/react/promise-timer/src/TimeoutException.php',
        'React\\Promise\\UnhandledRejectionException' => __DIR__ . '/..' . '/react/promise/src/UnhandledRejectionException.php',
        'React\\Socket\\Connection' => __DIR__ . '/..' . '/react/socket/src/Connection.php',
        'React\\Socket\\ConnectionInterface' => __DIR__ . '/..' . '/react/socket/src/ConnectionInterface.php',
        'React\\Socket\\Connector' => __DIR__ . '/..' . '/react/socket/src/Connector.php',
        'React\\Socket\\ConnectorInterface' => __DIR__ . '/..' . '/react/socket/src/ConnectorInterface.php',
        'React\\Socket\\DnsConnector' => __DIR__ . '/..' . '/react/socket/src/DnsConnector.php',
        'React\\Socket\\FixedUriConnector' => __DIR__ . '/..' . '/react/socket/src/FixedUriConnector.php',
        'React\\Socket\\LimitingServer' => __DIR__ . '/..' . '/react/socket/src/LimitingServer.php',
        'React\\Socket\\SecureConnector' => __DIR__ . '/..' . '/react/socket/src/SecureConnector.php',
        'React\\Socket\\SecureServer' => __DIR__ . '/..' . '/react/socket/src/SecureServer.php',
        'React\\Socket\\Server' => __DIR__ . '/..' . '/react/socket/src/Server.php',
        'React\\Socket\\ServerInterface' => __DIR__ . '/..' . '/react/socket/src/ServerInterface.php',
        'React\\Socket\\StreamEncryption' => __DIR__ . '/..' . '/react/socket/src/StreamEncryption.php',
        'React\\Socket\\TcpConnector' => __DIR__ . '/..' . '/react/socket/src/TcpConnector.php',
        'React\\Socket\\TcpServer' => __DIR__ . '/..' . '/react/socket/src/TcpServer.php',
        'React\\Socket\\TimeoutConnector' => __DIR__ . '/..' . '/react/socket/src/TimeoutConnector.php',
        'React\\Socket\\UnixConnector' => __DIR__ . '/..' . '/react/socket/src/UnixConnector.php',
        'React\\Socket\\UnixServer' => __DIR__ . '/..' . '/react/socket/src/UnixServer.php',
        'React\\Stream\\CompositeStream' => __DIR__ . '/..' . '/react/stream/src/CompositeStream.php',
        'React\\Stream\\DuplexResourceStream' => __DIR__ . '/..' . '/react/stream/src/DuplexResourceStream.php',
        'React\\Stream\\DuplexStreamInterface' => __DIR__ . '/..' . '/react/stream/src/DuplexStreamInterface.php',
        'React\\Stream\\ReadableResourceStream' => __DIR__ . '/..' . '/react/stream/src/ReadableResourceStream.php',
        'React\\Stream\\ReadableStreamInterface' => __DIR__ . '/..' . '/react/stream/src/ReadableStreamInterface.php',
        'React\\Stream\\ThroughStream' => __DIR__ . '/..' . '/react/stream/src/ThroughStream.php',
        'React\\Stream\\Util' => __DIR__ . '/..' . '/react/stream/src/Util.php',
        'React\\Stream\\WritableResourceStream' => __DIR__ . '/..' . '/react/stream/src/WritableResourceStream.php',
        'React\\Stream\\WritableStreamInterface' => __DIR__ . '/..' . '/react/stream/src/WritableStreamInterface.php',
        'Remini\\Core\\Messager' => __DIR__ . '/../..' . '/src/core/Messager.php',
        'Remini\\Repositories\\BaseRepository' => __DIR__ . '/../..' . '/src/repositories/BaseRepository.php',
        'Remini\\Services\\BaseService' => __DIR__ . '/../..' . '/src/services/BaseService.php',
        'Remini\\Services\\HelloService' => __DIR__ . '/../..' . '/src/services/HelloService.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc220412ce868d8d3a16f2a6ccfd56811::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc220412ce868d8d3a16f2a6ccfd56811::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc220412ce868d8d3a16f2a6ccfd56811::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc220412ce868d8d3a16f2a6ccfd56811::$classMap;

        }, null, ClassLoader::class);
    }
}