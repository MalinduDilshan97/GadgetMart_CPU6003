const bunyan = require('bunyan');
const bformat = require('bunyan-format')


let logger = null

if (process.env.NODE_ENV !== 'production') {
    const formatOut = bformat({outputMode: 'short'})
    logger = bunyan.createLogger({
        name: 'gadget_master',
        serializers: bunyan.stdSerializers,
        stream: formatOut
    });
} else {
    logger = bunyan.createLogger({
        name: 'gadget_master',
        serializers: bunyan.stdSerializers,
    });
}


module.exports = logger;
